<?php

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/login', [UserController::class , 'login'])->name('login')->middleware('guest');

Route::get('/register', [UserController::class , 'registerForm'])->middleware('guest');

Route::post('/create', [UserController::class , 'register'])->name('register');

Route::post('/authenticate' , [UserController::class , 'authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/', [ HomeController::class , 'showHome'])->middleware('auth');

Route::get('/products', [ ProductController::class , 'showProducts'])->middleware('auth');

Route::get('/products/{product:slug}', [ProductController::class, 'showSingleProduct'])->middleware('auth');

Route::get('/men', [ ProductController::class , 'showMenProducts'])->middleware('auth');

Route::get('/woman', [ ProductController::class , 'showWomanProducts'])->middleware('auth');

Route::get('/men/{product:slug}', [ProductController::class, 'showSingleProduct'])->middleware('auth');

Route::get('/woman/{product:slug}', [ProductController::class, 'showSingleProduct'])->middleware('auth');

Route::get('/cart', [CartController::class, 'showCart'])->middleware('auth');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::delete('/cart/item/{id}', [CartController::class, 'deleteItem'])->name('cart.deleteItem');

Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');



