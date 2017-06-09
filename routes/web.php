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
Route::get('/users/{id}', 'UserController@show')->name('usersDetail');

Route::get('/categories/{id}', 'CategoryController@show')->name('showProductByCategory');

Route::get('/types/{id}', 'TypeController@show')->name('showProductByType');

Route::post('/cart/store', 'CartController@store')->name('cartStore');
Route::get('/cart/show', 'CartController@show')->name('cartShow');
Route::get('/cart/{rowId}/delete', 'CartController@delete')->name('cartDelete');
Route::post('/cart/{rowId}/update', 'CartController@update')->name('cartUpdate');
Route::get('/cart/{error}', 'CartController@error')->name('cartError');

Route::get('/order/show', 'OrderController@show')->name('orderShow');
Route::post('/order/store', 'OrderController@store')->name('orderStore');
Route::get('/order/{order_id}', 'OrderController@orderInformation')
    ->name('orderInformation');

Route::post('/seach', 'SeachController@index')->name('seach');

Route::get('/ajaxCity', 'CityController@select');
Route::get('/ajaxDistrict', "DistrictController@select");

Route::group([ 'middleware' => ['auth']], function () {

    Route::get('/registerShops/create', 'ShopsController@create')->name('registerShopCreate');
    Route::post('/registerShops', 'ShopsController@store')->name('registerShopStore');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::get('/products', 'ProductController@index')->name('adminProducts');
    Route::get('/products/create', 'ProductController@create')->name('adminProductsCreate');
    Route::post('/products', 'ProductController@store')->name('adminProductsStore');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('adminProductsEdit');
    Route::put('/products/{id}', 'ProductController@update')->name('adminProductsUpdate');
    Route::get('/products/{id}/delete', 'ProductController@destroy')->name('adminProductsDelete');

    Route::get('/categories', 'CategoryController@index')->name('adminCategories');
    Route::get('/categories/create', 'CategoryController@create')->name('adminCategoriesCreate');
    Route::post('/categories', 'CategoryController@store')->name('adminCategoriesPost');
    Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('adminCategoriesEdit');
    Route::put('/categories/{id}', 'CategoryController@update')->name('adminCategoriesUpdate');
    Route::get('/categories/{id}/delete', 'CategoryController@destroy')->name('adminCategoriesDelete');

    Route::get('/countries', 'CountryController@index')->name('adminCountries');
    Route::get('/countries/create', 'CountryController@create')->name('adminCountriesCreate');
    
    Route::get('/shopImages', 'ShopImageController@index')->name('adminShopImages');
    Route::get('/shopImages/create', 'ShopImageController@create')->name('adminShopImagesCreate');
    Route::post('/shopImages', 'ShopImageController@store')->name('adminShopImagesStore');
    Route::get('/shopImages/{id}/edit', 'ShopImageController@edit')->name('adminShopImagesEdit');
    Route::put('/shopImages/{id}', 'ShopImageController@update')->name('adminShopImagesUpdate');
    Route::get('/shopImages/{id}/delete', 'ShopImageController@destroy')->name('adminShopImagesDelete');
 
    Route::post('/countries', 'CountryController@store')->name('adminCountriesStore');
    Route::get('/countries/{id}/edit', 'CountryController@edit')->name('adminCountriesEdit');
    Route::put('/countries/{id}', 'CountryController@update')->name('adminCountriesUpdate');
    Route::get('/countries/{id}/delete', 'CountryController@destroy')->name('adminCountriesDelete');

    Route::get('/cities', 'CityController@index')->name('adminCities');

    Route::get('/types', 'TypeController@index')->name('adminTypes');
    Route::get('/types/create', 'TypeController@create')->name('adminTypesCreate');
    Route::post('/types', 'TypeController@store')->name('adminTypesStore');
    Route::get('/types/{id}/edit', 'TypeController@edit')->name('adminTypesEdit');
    Route::put('/types/{id}', 'TypeController@update')->name('adminTypesUpdate');
    Route::get('/types/{id}/delete', 'TypeController@destroy')->name('adminTypesDelete');

    Route::get('/shops', 'ShopController@index')->name('adminShops');
    Route::get('/shops/create', 'ShopController@create')->name('adminShopCreate');
    Route::post('/shops', 'ShopController@store')->name('adminShopStore');
    Route::get('/shops/{id}/edit', 'ShopController@edit')->name('adminShopEdit');
    Route::put('/shops/{id}', 'ShopController@update')->name('adminShopUpdate');
    Route::get('/shops/{id}/delete', 'ShopController@destroy')->name('adminShopsDelete');

    Route::get('/cities/create', 'CityController@create')->name('adminCitiesCreate');
    Route::post('/cities', 'CityController@store')->name('adminCitiesStore');
    Route::get('/cities/{id}/edit', 'CityController@edit')->name('adminCitiesEdit');
    Route::put('/cities/{id}', 'CityController@update')->name('adminCitiesUpdate');
    Route::get('/cities/{id}/delete', 'CityController@destroy')->name('adminCitiesDelete');

    Route::get('/districts', 'DistrictController@index')->name('adminDistricts');
    Route::get('/districts/create', 'DistrictController@create')->name('adminDistrictsCreate');
    Route::post('/districts', 'DistrictController@store')->name('adminDistrictsStore');
    Route::get('/districts/{id}/edit', 'DistrictController@edit')->name('adminDistrictsEdit');
    Route::put('/districts/{id}', 'DistrictController@update')->name('adminDistrictsUpdate');
    Route::get('/districts/{id}/delete', 'DistrictController@destroy')->name('adminDistrictsDelete');

    Route::get('/addresses', 'AddressController@index')->name('adminAddresses');
    Route::get('/addresses/create', 'AddressController@create')->name('adminAddressesCreate');
    Route::post('/addresses', 'AddressController@store')->name('adminAddressesStore');
    Route::get('/addresses/{id}/edit', 'AddressController@edit')->name('adminAddressesEdit');
    Route::put('/addresses/{id}', 'AddressController@update')->name('adminAddressesUpdate');
    Route::get('/addresses/{id}/delete', 'AddressController@destroy')->name('adminAddressesDelete');

    Route::get('/users', 'UserController@index')->name('adminUsers');
    Route::get('/users/create', 'UserController@create')->name('adminUsersCreate');
    Route::post('/users', 'UserController@store')->name('adminUsersStore');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('adminUsersEdit');
    Route::put('/user{id}', 'UserController@update')->name('adminUsersUpdate');
    Route::get('/users/{id}/delete', 'UserController@destroy')->name('adminUsersDelete');

    Route::get('/orders', 'OrderController@index')->name('adminOrders');
    Route::get('/orders/{id}/show', 'OrderController@show')->name('adminOrdersShow');
    Route::put('/orders/{id}/edit', 'OrderController@edit')->name('orderAdminEdit');

    Route::get('/roles', 'RoleController@index')->name('adminRoles');
    Route::get('/roles/{id}/edit', 'RoleController@edit')->name('adminRolesEdit');
    Route::put('/roles/{id}', 'RoleController@update')->name('adminRolesUpdate');
    Route::get('/roles/create', 'RoleController@create')->name('adminRolesCreate');
    Route::post('/roles', 'RoleController@store')->name('adminRolesStore');
    Route::get('/roles/{id}/delete', 'RoleController@destroy')->name('adminRolesDelete');

    Route::get('/contacts', 'ContactController@index')->name('adminContacts');
});
