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
Route::get('/cart/reset', 'CustomerController@reset');
Route::get('/cart/remove/{rowId}', 'CustomerController@remove');
Route::get('/bookToCart/{book_id}', 'CustomerController@bookToCart');
Route::get('/editAccount', 'CustomerController@editAccount');
Route::get('/paymentComplete', 'CustomerController@paymentComplete');
Route::get('/user', 'CustomerController@user');
Route::get('/category/{id}', 'CustomerController@category');

 // 以下、本来SupplierControllerにあるもの。エラーが起こるため移植。
Route::get('/orders', 'CustomerController@orders');
Route::get('/registration', 'CustomerController@registration');
Route::post('/registrateNewBook','CustomerController@registrateNewBook');
Route::post('/updateOrderStatus','CustomerController@updateOrderStatus');

// logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// sessiont
Route::get('test','CustomerController@test');
