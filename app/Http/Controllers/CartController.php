<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddToCartRequest;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function showCart()
    {
        $user = auth()->user(); // Mengambil user yang sedang login
        $cart = $user->cart; // Mengambil keranjang milik user tersebut
        $cartItems = $cart ? $cart->cartItems()->with('product', 'productVariant')->get() : collect(); // Memuat item-item dalam keranjang beserta produk terkait dan variannya
        $products = Product::all();

        #dd($cartItems);

        return view('cart', [
            'title' => 'Cart',
            'user' => $user,
            'products' => $products,
            'cartItems' => $cartItems,
            'cart' => $cart 
        ]);
    }

    public function add(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,shoe_id',
            'variant_id' => 'required|exists:product_variants,variant_id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        // Periksa apakah stok mencukupi
        $variant = ProductVariant::find($validatedData['variant_id']);
        if ($variant->stock < $validatedData['quantity']) {
            return redirect()->back()->withErrors(['quantity' => 'Stok tidak mencukupi.']);
        }
    
        // Ambil user yang sedang login
        $user = Auth::user();
    
        // Ambil atau buat keranjang untuk user
        $cart = $user->cart()->firstOrCreate(['user_id' => $user->id]);
    
        // Periksa apakah item dengan variant_id yang sama sudah ada di dalam cart_items
        $cartItem = CartItem::where('cart_id', $cart->id)
                            ->where('variant_id', $validatedData['variant_id'])
                            ->first();
    
        if ($cartItem) {
            // Perbarui kuantitas item yang ada
            $newQuantity = $cartItem->quantity + $validatedData['quantity'];
    
            // Periksa apakah stok mencukupi untuk kuantitas baru
            if ($variant->stock < $newQuantity) {
                return redirect()->back()->withErrors(['quantity' => 'Stok tidak mencukupi untuk kuantitas yang diminta.']);
            }
    
            $cartItem->quantity = $newQuantity;
            $cartItem->save();
        } else {
            // Tambahkan item baru ke keranjang
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $validatedData['product_id'],
                'variant_id' => $validatedData['variant_id'],
                'quantity' => $validatedData['quantity'],
            ]);
        }
    
        // Kurangi stok produk
        $variant->stock -= $validatedData['quantity'];
        $variant->save();
    
        // Redirect ke halaman keranjang dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
    
    public function deleteItem(Request $request, $id)
    {
        // Ambil user yang sedang login
        $user = Auth::user();
    
        // Ambil item dari keranjang yang dimiliki oleh user yang sedang login
        $cartItem = CartItem::where('id', $id)
                            ->whereHas('cart', function($query) use ($user) {
                                $query->where('user_id', $user->id);
                            })->firstOrFail();
    
        // Kembalikan stok produk
        $variant = ProductVariant::find($cartItem->variant_id);
        $variant->stock += $cartItem->quantity;
        $variant->save();
    
        // Hapus item dari keranjang
        $cartItem->delete();
    
        // Redirect kembali ke halaman keranjang dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }

    public function checkout(Request $request)
    {
        // Validasi input untuk memastikan 'cart_id' ada
        $request->validate([
            'cart_id' => 'required|integer|exists:carts,id',
        ]);

        $cartId = $request->input('cart_id');

        // Cek apakah keranjang memiliki item
        $cartItemsCount = CartItem::where('cart_id', $cartId)->count();

        if ($cartItemsCount == 0) {
            // Jika keranjang kosong, kembalikan pesan kesalahan
            return redirect()->back()->with('error', 'Keranjang belanja Anda kosong.');
        }

        // Hapus semua item di tabel cart_items yang sesuai dengan cart_id
        CartItem::where('cart_id', $cartId)->delete();

        // Tambahkan logika tambahan di sini, misalnya menyimpan data pesanan di tabel lain

        return redirect()->back()->with('success', 'Checkout berhasil. Keranjang belanja Anda sudah kosong.');
    }
}


