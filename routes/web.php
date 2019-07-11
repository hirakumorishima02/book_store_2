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

Route::get('/', 'UserController@index');
Auth::routes();

// CustomerController
Route::get('/account', 'CustomerController@account');
Route::get('/editAccount', 'CustomerController@editAccount');
Route::post('/addAccount', 'CustomerController@addAccount');
Route::post('/updateAccount', 'CustomerController@updateAccount');
Route::get('/book/{id}', 'CustomerController@book');
Route::get('/cart', 'CustomerController@cart');
Route::get('/editAccount', 'CustomerController@editAccount');
Route::get('/paymentComplete', 'CustomerController@paymentComplete');
Route::get('/user', 'CustomerController@user');
Route::get('/category/{id}', 'CustomerController@category');

// SupplierController
Route::get('/orders', 'SupplierController@orders');
Route::get('/registration', 'SupplierController@registration');

// logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
