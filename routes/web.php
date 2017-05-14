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

    Route::get('/districts', 'DistrictController@index')->name('adminDistricts');

    Route::get('/districts/create', 'DistrictController@create');

    Route::post('/districts', 'DistrictController@store')->name('adminDistricts');

    Route::get('/districts/delete/{id}', 'DistrictController@destroy')->name('adminDistricts_delete');

    Route::get('/districts/edit/{id}', 'DistrictController@update')->name('adminDistricts_update');

    Route::put('/updateCountry/{id}', 'DistrictController@updateDistrict');
});
