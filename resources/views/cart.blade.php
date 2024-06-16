<x-layout :user="$user">
  <x-slot:title>{{ $title }}</x-slot:title>
  <section class="bg-white py-8 antialiased light:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
      <h2 class="text-xl font-semibold text-gray-900 dark:text-dark sm:text-2xl">Shopping Cart</h2>
  
      <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
        <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
          <div class="space-y-6">
            
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Failed</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            
            {{-- shopping cart --}}
            @foreach($cartItems as $item)
            <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm md:p-6">
                <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                    <a href="/products/{{ $item->product->slug }}" class="shrink-0 md:order-1">
                        <img class="h-20 w-20" src="{{ $item->product->url }}" alt="{{ $item->product->name }} image" />
                    </a>

                    <div class="flex items-center justify-between md:order-3 md:justify-end">
                        <div class="flex items-center justify-end">
                            <p class="text-sm font-medium text-gray-900 mr-2">Quantity :</p>
                            <input type="text" id="counter-input-{{ $item->id }}" data-input-counter class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" placeholder="" value="{{ $item->quantity }}" readonly />
                        </div>
                        <div class="text-end md:order-4 md:w-35">
                            <p class="text-base font-bold text-gray-900">IDR {{ number_format($item->product->price * $item->quantity, 2, ',','.') }}</p>
                        </div>
                    </div>                                        
        
                    <div class="w-full min-w-0 flex-1 space-y-4 md:order-2 md:max-w-md">
                        <a href="/products/{{ $item->product->slug }}" class="text-base font-medium text-gray-900 hover:underline">{{ $item->product->name }}</a>
        
                        <!-- Menampilkan ukuran sepatu -->
                        <div class="flex items-center gap-4">
                            <p class="text-sm font-medium text-gray-900">Ukuran: {{ $item->productVariant->size }}</p>
                        </div>
        
                        <div class="flex items-center gap-4">
                            <!-- Assume $cartItem is the current cart item being iterated over -->
                            <style>
                                .custom-remove-btn {
                                    background-color: #dc3545; /* Warna merah */
                                    color: white; /* Warna teks putih */
                                    border: 1px solid #dc3545; /* Border merah */
                                    border-radius: 5px; /* Border bulat */
                                    padding: 0.25rem 0.75rem; /* Padding */
                                    font-size: 0.875rem; /* Ukuran font */
                                }
                                .custom-remove-btn:hover {
                                    background-color: #c82333; /* Warna merah yang lebih gelap saat dihover */
                                    border-color: #c82333; /* Border merah yang lebih gelap saat dihover */
                                }
                            </style>
                            
                            <form action="{{ route('cart.deleteItem', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="custom-remove-btn">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                    
          </div>
          

          {{-- product lain --}}
          <div class="hidden xl:mt-8 xl:block">
            <h3 class="text-2xl font-semibold text-gray-900">People also bought</h3>
            <div class="mt-6 grid grid-cols-3 gap-4 sm:mt-8">
        
                @foreach ($products->take(3) as $product)
                <div class="space-y-6 overflow-hidden rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
                    <a href="/products/{{ $product['slug'] }}" class="overflow-hidden rounded">
                      <img class="mx-auto h-44 w-44" src="{{ $product['url'] }}" alt="imac image" />
                    </a>
                    <div>
                      <a href="/products/{{ $product['slug'] }}" class="text-lg font-semibold leading-tight text-gray-900 hover:underline">{{ $product['name'] }}</a>
                      <p class="mt-2 text-base font-normal text-gray-500">{{  Str::limit($product['description'], 100) }}</p>
                    </div>
                    <div>
                      <p class="text-lg font-bold text-gray-900">
                        <span class="line-through"> Rp.3.000.000,00</span>
                      </p>
                      <p class="text-lg font-bold leading-tight text-red-600">Rp.{{ number_format($product->price, 2, ',', '.') }}</p>
                    </div>
                    <div class="mt-6 flex items-center gap-2.5">
                      <button type="button" class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                        <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7h-1M8 7h-.688M13 5v4m-2-2h4" />
                        </svg>
                          Add to cart
                      </button>
                    </div>
                </div>
                @endforeach
            </div>
          </div>        
        </div>
  
        <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
            <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
                <p class="text-xl font-semibold text-gray-900">Order summary</p>
        
                <div class="space-y-4">
                    @php
                    $subtotal = 0;
                    foreach($cartItems as $item) {
                        $subtotal += $item->product->price * $item->quantity;
                    }
                    $discountRate = 0.20; // 20% discount rate
                    $discount = $subtotal * $discountRate;
                    $subtotalAfterDiscount = $subtotal - $discount;
                    $taxRate = 0.11; // 11% tax rate
                    $tax = $subtotalAfterDiscount * $taxRate;
                    $storePickupFee = 99; // Assuming a fixed store pickup fee
                    $total = $subtotalAfterDiscount + $storePickupFee + $tax;
                    @endphp
        
                    <div class="space-y-2">
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Original Price</dt>
                            <dd class="text-base font-medium text-gray-900">{{ '$'.number_format($subtotal, 2) }}</dd>
                        </dl>
        
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Discount</dt>
                            <dd class="text-base font-medium text-red-600">{{ '-$'.number_format($discount, 2) }}</dd>
                        </dl>
        
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Store Pickup</dt>
                            <dd class="text-base font-medium text-gray-900">{{ '$'.$storePickupFee }}</dd>
                        </dl>
        
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500">Tax (11%)</dt>
                            <dd class="text-base font-medium text-gray-900">{{ '$'.number_format($tax, 2) }}</dd>
                        </dl>
                    </div>
        
                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                        <dt class="text-base font-bold text-gray-900">Total</dt>
                        <dd class="text-base font-bold text-gray-900">{{ '$'.number_format($total, 2) }}</dd>
                    </dl>
                </div>
                
                <form id="checkout-form" action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="cart_id" value="{{ $cart->id }}" />
                    <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Checkout</button>
                </form>

                {{-- <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Checkout</button> --}}
        
                <div class="flex items-center justify-center gap-2">
                    <span class="text-sm font-normal text-gray-500"> or </span>
                    <a href="/products" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline">
                        Continue Shopping
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
                

      </div>
    </div>
  </section>
  
</x-layout>