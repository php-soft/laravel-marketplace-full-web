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

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('/products', 'ProductController@index')->name('adminProducts');

    Route::get('/categories', 'CategoryController@index')->name('adminCategories');
    Route::get('/categories/create', 'CategoryController@create')->name('adminCategoriesCreate');
    Route::post('/categories', 'CategoryController@store')->name('adminCategories');

    Route::get('/countries', 'CountryController@index')->name('adminCountries');
    Route::get('/countries/create', 'CountryController@create')->name('adminCountriesCreate');
    Route::post('/countries', 'CountryController@store')->name('adminCountries');
    Route::get('/countries/{id}/edit', 'CountryController@update')->name('adminCountriesUpdate');
    Route::put('/countries/{id}', 'CountryController@updateCountry');
});
