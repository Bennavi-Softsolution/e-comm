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
    return view('pages/product');
});
Route::get('/navbar', function () {
    return view('pages/navbar');
});

Route::get('/cart', function () {
    return view('pages/cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/signup', function () {
    return view('signup');

});

Route::get('/manage-product', function () {
    return view('manage-product');
});
Route::get('/select-location', function () {
    return view('pages/select-location');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/deliveries', function () {
    return view('deliveries');
});

Route::get('/payment', function () {
    return view('pages/payment');
});

Route::get('/admindashboard', function () {
    return view('pages/admindashboard');
});

Route::get('/clientfooter', function () {
    return view('clientfooter');
});

Route::get('/adminfooter', function () {
    return view('adminfooter');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/adminnavbar', function () {
    return view('adminnavbar');
});
