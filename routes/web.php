<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('page.home');

Route::get('/about', function () {
    return view('about');
})->name('page.about');

Route::get('/menu', function () {
    return view('menu');
})->name('page.menu');

Route::get('/services', function () {
    return view('services');
})->name('page.services');

Route::get('/shop', function () {
    return view('shop');
})->name('page.shop');

Route::get('/cart', function () {
    return view('cart');
})->name('page.cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('page.checkout');

Route::get('/product-single', function () {
    return view('product-single');
})->name('page.product-single');

Route::get('/contact', function () {
    return view('contact');
})->name('page.contact');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
