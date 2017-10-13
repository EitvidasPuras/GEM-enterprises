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

Route::get('/bestselling', 'BestsellingController@index');

Route::get('/settings', 'SettingsController@index');
Route::post('settings', 'SettingsController@changePassword');

Route::resource('categories', 'CategoriesController');
Route::resource('items', 'ItemsController');

Auth::routes();

Route::middleware('roles', 'Admin')->group(function () {
    Route::resource('/admin/users', 'AdminPageUsersController');
    Route::resource('/admin/items', 'ItemsController');
    Route::view('/admin', 'AdministratorPages.admin')->name('admin');
    Route::view('/admin/suppliers', 'AdministratorPages.suppliers')->name('adminSuppliers');
    //Route::view('/admin/items', 'AdministratorPages.items')->name('adminItems');
});
