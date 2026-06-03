<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController; 
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');

Route::view('/about', 'about');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::view('/review', 'review');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::post('/cart/add/{productId}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::post('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase')->middleware('auth');
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease')->middleware('auth');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

