<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// routes for the buttons
Route::get('/orders/{order}/confirmed','OrdersController@ConfirmedAt')->name('confirmed');
Route::get('/orders/{order}/pickedup','OrdersController@PickedUpAt')->name('pickedup');
Route::get('/orders/{order}/delivered','OrdersController@DeliveredAt')->name('delivered');

Route::get('/myorders','OrdersController@MyOrders')->name('myorders');
Route::resource('orders', 'OrdersController');
