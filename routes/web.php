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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
Route::redirect('/', 'EsosasPreces');
Route::resource('EsosasPreces', 'EsosasPrecesController');

Auth::routes();
Route::get('/about', 'VeikalsController@index');
Route::get('/allorders/{id?}','AllordersController@index');
Route::get('/shop-orders', 'ShopController@index');


Route::get('/{id?}', 'OrderController@create');
Route::post('/show','OrderController@store');
Route::post('/showall','ShopController@store');
Route::post('/details/{?id}','OrderController@details');


