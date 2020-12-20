<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\signupController;
use App\http\Controllers\messagesController;
use App\http\Controllers\UserAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/shop', function () {
    return view('shop');
});




Route::post('registeration',[signupController::class,'registeration']);

Route::post('login',[signupController::class,'login']);
Route::post('addMessage',[messagesController::class,'addMessage']);

