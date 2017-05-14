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

    Route::get('/countries', 'CountryController@index')->name('adminCountries');

    Route::get('/products', 'ProductController@index')->name('adminProducts');

    Route::get('/countries/create', 'CountryController@create');

    Route::post('/countries', 'CountryController@store')->name('adminCountries');

    Route::get('/countries/delete/{id}', 'CountryController@destroy')->name('adminCountries_delete');

    Route::get('/countries/edit/{id}', 'CountryController@update')->name('adminCountries_update');

    Route::put('/updateCountry/{id}', 'CountryController@updateCountry');
});
