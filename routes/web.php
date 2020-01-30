<?php

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

// Main pages
Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/shop', 'HomeController@shop')->name('shop.index');
Route::get('/shop/{product}', 'HomeController@shopShow')->name('shop.show');

// Cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

// Checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');

// Orders
Route::get('/orders', 'HomeController@orders')->name('orders');
