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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'CatalogueController@view')->name('home');
Route::get('/home', 'CatalogueController@view')->name('home');

Route::get('/catalogue', 'CatalogueController@view')->name('product');

Route::get('product/{catalogue}', 'ProductController@product')->name('catalogue');

Route::get('/admin', 'AdminController@admin')->name('store');
Route::post('/store', 'AdminController@create')->name('name');


Route::get('/basket', 'BasketController@basket')->name('basket');
Route::post('/basket', 'CatalogueController@create')->name('basket');

Route::get('delete/{id}', 'BasketController@delete');
