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

Route::get('/', 'ProductController@home');
Route::get('admin', 'AdminController@admin');
Route::get('showbycategory/{id}', 'ProductController@showbycategory');
Route::get('showbytrademark/{id}', 'ProductController@showbytrademark');
Route::get('showbyshop/{id}', 'ProductController@showbyshop');
Route::get('showoneproduct/{id}', 'ProductController@showoneproduct');

Route::get('update/product/{id}', 'AdminController@viewupdateProduct');
Route::get('addtocart/{id}', 'CartController@addtocart');
Route::get('viewcart', 'CartController@viewcart');
Route::get('removecart/{rowId}', 'CartController@removecart');
Route::get('desc_cart/{rowId}', 'CartController@desc_cart');
Route::get('inc_cart/{rowId}', 'CartController@inc_cart');


Route::post('storeCategory', 'AdminController@storeCategory');
Route::post('storeTrademark', 'AdminController@storeTrademark');
Route::post('storeProduct', 'AdminController@storeProduct');
Route::post('updateProduct', 'AdminController@updateProduct');
