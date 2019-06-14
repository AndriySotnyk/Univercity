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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/order/create', 'OrderController@create')->name('create');
Route::post('/order/create');
Route::get('order/', 'OrderController@index')->name('oreders');
Route::get('order/pay', 'OrderController@payment')->name('payment');
Route::post('order/paygateaway', 'OrderController@paymentGateaway');




Route::get('/order/{id}', 'OrderController@order')->name('order');
Route::post('/order/id/take', 'OrderController@takeOrder');

