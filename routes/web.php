<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/manage-product', function () {
    return view('manage-product');
});
Route::get('/select-location', function () {
    return view('select-location');
});
