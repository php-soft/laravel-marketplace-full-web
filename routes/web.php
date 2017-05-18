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
    Route::get('/products/create', 'ProductController@create')->name('adminProductsCreate');
    Route::post('/products', 'ProductController@store')->name('adminProductsStore');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('adminProductsEdit');
    Route::put('/products/{id}', 'ProductController@update')->name('adminProductsUpdate');

    Route::get('/categories', 'CategoryController@index')->name('adminCategories');
    Route::get('/categories/create', 'CategoryController@create')->name('adminCategoriesCreate');
    Route::post('/categories', 'CategoryController@store')->name('adminCategoriesPost');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('adminCategoriesEdit');
    Route::put('/categories/{id}', 'CategoryController@update')->name('adminCategoriesUpdate');
    Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('adminCategoriesDelete');

    Route::get('/countries', 'CountryController@index')->name('adminCountries');
    Route::get('/countries/create', 'CountryController@create')->name('adminCountriesCreate');
    Route::post('/countries', 'CountryController@store')->name('adminCountriesStore');
    Route::get('/countries/{id}/edit', 'CountryController@edit')->name('adminCountriesEdit');
    Route::put('/countries/{id}', 'CountryController@update')->name('adminCountriesUpdate');
    Route::get('/countries/{id}/delete', 'CountryController@destroy')->name('adminCountriesDelete');

    Route::get('/cities', 'CityController@index')->name('adminCities');
    Route::get('/cities/create', 'CityController@create')->name('adminCitiesCreate');
    Route::post('/cities', 'CityController@store')->name('adminCitiesStore');

    Route::get('/districts', 'DistrictController@index')->name('adminDistricts');
});
