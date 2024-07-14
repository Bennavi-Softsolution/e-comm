<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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



Route::get('/', [HomeController::class, 'index']);

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

Route::get('/checkout', function () {
    return view('pages/checkout');
});

Route::get('/address', function () {
    return view('address');
});  

Route::get('/signup', function () {
    return view('signup');

});

Route::get('/manage-product', function () {
    return view('manage-product');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/payment', function () {
    return view('pages/payment');
});

Route::get('/admindashboard', function () {
    return view('pages/admindashboard');
<<<<<<< HEAD
});
=======

>>>>>>> b83503bfe4edb0d0717cde9a332d0606e2acd738
Route::get('/clientfooter', function () {
    return view('clientfooter');
});


