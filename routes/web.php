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
    return redirect('/items/');
});

Route::get('/bestselling', 'BestsellingController@index')->name('bestselling');
Route::get('/shoppingcart', 'ShoppingCartController@index')->name('shoppingcart');

Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('settings', 'SettingsController@changePassword');

Route::resource('categories', 'CategoriesController');
Route::get('items/search', 'ItemsController@search')->name('search');
Route::resource('items', 'ItemsController', ['as' => 'user']);


Auth::routes();

Route::middleware('roles')->group(function () {
    Route::group(['roles' => 'Admin'], function () {
        Route::resource('/admin/items', 'AdminPageItemsController');
        Route::resource('/admin/users', 'AdminPageUsersController');
        Route::view('/admin/suppliers', 'AdministratorPages.suppliers')->name('adminSuppliers');
        Route::view('/admin', 'AdministratorPages.admin')->name('admin');
    });
});
