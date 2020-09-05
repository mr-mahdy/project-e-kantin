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

Route::get('/', 'PagesController@home')->middleware('guest');
Route::get('/menuHome', 'PagesController@menu')->middleware('guest');
Route::get('/menuHome/getData', 'PagesController@getData')->middleware('guest');
Route::get('/about', 'PagesController@about')->middleware('guest');
Route::get('/login', 'PagesController@login')->middleware('guest');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::post('/logout', 'Auth\LoginController@logout')->middleware('web')->name('logout');

// category
Route::resource('category', 'CategoryController')->middleware('auth');

// table
Route::resource('table', 'TableController')->middleware('auth');

// stand
Route::resource('stand', 'StandController')->middleware('auth');

// menu
Route::resource('menu', 'MenuController')->middleware('auth');

// reservation
Route::resource('reservation', 'ReservationController')->middleware('auth');

Route::post('/reservation', 'ReservationController@store')->middleware('guest');

// order
Route::resource('order', 'OrderController')->middleware('auth');

// payment
Route::resource('payment', 'PaymentController')->middleware('auth');
