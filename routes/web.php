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
use Illuminate\Support\Facades\Auth;



Route::get('/', 'MainController@index') -> name('index');
Route::get('/categories', 'MainController@categories')-> name('categories');



Route::get('/basket', 'BasketController@basket')-> name('basket');
Route::get('/basket/place', 'BasketController@basketPlace')-> name('basketPlace');
Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basketAdd');
Route::post('/basket/delete/{id}', 'BasketController@basketDelete')->name('basketDelete');
Route::post('/basket/place', 'BasketController@basketConfirm')-> name('basket-confirm');



Route::get('/{category}', 'MainController@category')-> name('category');
Route::get('/{category}/{product?}', 'MainController@product')-> name('product');


