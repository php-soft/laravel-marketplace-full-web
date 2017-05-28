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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/products/{id}', 'ProductController@show')->name('productsDetail');

Route::get('/categoy/{id}', 'CategoryController@show')->name('showProductByCategory');

Route::post('/cart/store', 'CartController@store')->name('cartStore');
Route::get('/cart/show', 'CartController@show')->name('cartShow');

Route::get('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin')->middleware('auth');

    Route::get('/products', 'ProductController@index')->name('adminProducts')->middleware('auth');
    Route::get('/products/create', 'ProductController@create')->name('adminProductsCreate')->middleware('auth');
    Route::post('/products', 'ProductController@store')->name('adminProductsStore')->middleware('auth');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('adminProductsEdit')->middleware('auth');
    Route::put('/products/{id}', 'ProductController@update')->name('adminProductsUpdate')->middleware('auth');
    Route::get('/products/{id}/delete', 'ProductController@destroy')->name('adminProductsDelete')->middleware('auth');

    Route::get('/categories', 'CategoryController@index')->name('adminCategories')->middleware('auth');
    Route::get('/categories/create', 'CategoryController@create')->name('adminCategoriesCreate')->middleware('auth');
    Route::post('/categories', 'CategoryController@store')->name('adminCategoriesPost')->middleware('auth');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('adminCategoriesEdit')->middleware('auth');
    Route::put('/categories/{id}', 'CategoryController@update')->name('adminCategoriesUpdate')->middleware('auth');
    Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('adminCategoriesDelete')->middleware('auth');

    Route::get('/countries', 'CountryController@index')->name('adminCountries')->middleware('auth');
    Route::get('/countries/create', 'CountryController@create')->name('adminCountriesCreate')->middleware('auth');
    Route::post('/countries', 'CountryController@store')->name('adminCountries')->middleware('auth');

    Route::get('/shopImages', 'ShopImageController@index')->name('adminShopImages')->middleware('auth');

    Route::post('/countries', 'CountryController@store')->name('adminCountriesStore')->middleware('auth');
    Route::get('/countries/{id}/edit', 'CountryController@edit')->name('adminCountriesEdit')->middleware('auth');
    Route::put('/countries/{id}', 'CountryController@update')->name('adminCountriesUpdate')->middleware('auth');
    Route::get('/countries/{id}/delete', 'CountryController@destroy')->name('adminCountriesDelete')->middleware('auth');

    Route::get('/cities', 'CityController@index')->name('adminCities')->middleware('auth');

    Route::get('/types', 'TypeController@index')->name('adminTypes')->middleware('auth');
    Route::get('/types/create', 'TypeController@create')->name('adminTypesCreate')->middleware('auth');
    Route::post('/types', 'TypeController@store')->name('adminTypesStore')->middleware('auth');
    Route::get('/types/{id}/edit', 'TypeController@edit')->name('adminTypesEdit')->middleware('auth');
    Route::put('/types/{id}', 'TypeController@update')->name('adminTypesUpdate')->middleware('auth');
    Route::get('/types/{id}/delete', 'TypeController@destroy')->name('adminTypesDelete')->middleware('auth');

    Route::get('/shops', 'ShopController@index')->name('adminShops')->middleware('auth');
    Route::get('/shops/create', 'ShopController@create')->name('adminShopCreate')->middleware('auth');
    Route::post('/shops', 'ShopController@store')->name('adminShopStore');
    Route::get('/shops/{id}/delete', 'ShopController@destroy')->name('adminShopsDelete')->middleware('auth');

    Route::get('/cities/create', 'CityController@create')->name('adminCitiesCreate')->middleware('auth');
    Route::post('/cities', 'CityController@store')->name('adminCitiesStore')->middleware('auth');
    Route::get('/cities/{id}/edit', 'CityController@edit')->name('adminCitiesEdit')->middleware('auth');
    Route::put('/cities/{id}', 'CityController@update')->name('adminCitiesUpdate')->middleware('auth');
    Route::get('/cities/{id}/delete', 'CityController@destroy')->name('adminCitiesDelete')->middleware('auth');

    Route::get('/districts', 'DistrictController@index')->name('adminDistricts')->middleware('auth');
    Route::get('/districts/create', 'DistrictController@create')->name('adminDistrictsCreate')->middleware('auth');
    Route::post('/districts', 'DistrictController@store')->name('adminDistrictsStore')->middleware('auth');
    Route::get('/districts/{id}/edit', 'DistrictController@edit')->name('adminDistrictsEdit')->middleware('auth');
    Route::put('/districts/{id}', 'DistrictController@update')->name('adminDistrictsUpdate')->middleware('auth');
    Route::get('/districts/{id}/delete', 'DistrictController@destroy')->name('adminDistrictsDelete')->middleware('auth');

    Route::get('/addresses', 'AddressController@index')->name('adminAddresses')->middleware('auth');
    Route::get('/addresses/create', 'AddressController@create')->name('adminAddressesCreate')->middleware('auth');
    Route::post('/addresses', 'AddressController@store')->name('adminAddressesStore')->middleware('auth');
    Route::get('/addresses/{id}/edit', 'AddressController@edit')->name('adminAddressesEdit')->middleware('auth');
    Route::put('/addresses/{id}', 'AddressController@update')->name('adminAddressesUpdate')->middleware('auth');
    Route::get('/addresses/{id}/delete', 'AddressController@destroy')->name('adminAddressesDelete')->middleware('auth');

    Route::get('/users', 'UserController@index')->name('adminUsers')->middleware('auth');
    Route::get('/users/create', 'UserController@create')->name('adminUsersCreate')->middleware('auth');
    Route::post('/users', 'UserController@store')->name('adminUsersStore')->middleware('auth');

    Route::get('/orders', 'OrderController@index')->name('adminOrders')->middleware('auth');
    Route::get('/orders/{id}/show', 'OrderController@show')->name('adminOrdersShow')->middleware('auth');

    Route::get('/roles', 'RoleController@index')->name('adminRoles')->middleware('auth');
    Route::get('/roles/{id}/edit', 'RoleController@edit')->name('adminRolesEdit')->middleware('auth');
    Route::put('/roles/{id}', 'RoleController@update')->name('adminRolesUpdate')->middleware('auth');
    Route::get('/roles/create', 'RoleController@create')->name('adminRolesCreate')->middleware('auth');
    Route::post('/roles', 'RoleController@store')->name('adminRolesStore')->middleware('auth');
    Route::get('/roles/{id}/delete', 'RoleController@destroy')->name('adminRolesDelete')->middleware('auth');

    Route::get('/contacts', 'ContactController@index')->name('adminContacts')->middleware('auth');
});
