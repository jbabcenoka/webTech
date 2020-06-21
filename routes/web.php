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
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');


Route::redirect('/', 'EsosasPreces');
Route::resource('EsosasPreces', 'EsosasPrecesController');

Route::get('/about', 'VeikalsController@index');


Route::get('/gallery', 'GalleryController@index');
Route::patch('/gallery/images', 'GalleryController@store');


Route::get('/allorders/{id?}','AllordersController@index');
Route::get('/shop-orders', 'ShopController@index');
Route::get('/users-orders', 'ShopController@show');
Route::get('/emploqees', 'ShopController@showEmploqees');
Route::patch('/users-orders-update', 'ShopController@update');


<<<<<<< HEAD
=======


>>>>>>> 63a5ddf4b6fea96163ac559c792098fc8dc68b03
Route::get('/{id?}', 'OrderController@create');
Route::get('/emploqee/{id?}', 'VeikalsController@destroy');
Route::post('/show','OrderController@store');
Route::post('/newEmploqee','VeikalsController@store');

<<<<<<< HEAD

=======
Route::get('lang/{locale}','LanguageController');
>>>>>>> 63a5ddf4b6fea96163ac559c792098fc8dc68b03
Route::post('/showall','ShopController@store');
Route::post('/details/{?id}','OrderController@details');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
