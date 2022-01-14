<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@Home');
Route::get('/home', 'MainController@Home');
Route::get('/items', 'MainController@ItemView');
Route::get('/product/{id}', 'MainController@ProductView');
Route::get('/cart','MainController@CartView');
Route::get('/cartclear','MainController@ClearCart');
Route::get('/cart/delete/{id}','MainController@DeleteItemCart');

Route::post('/cart','MainController@UpdateCart')->name('UpdateCart');

Route::name('admin.')->group(function()
{
    Route::get('/admin', 'AdminController@PanelView')->name('panel');
    Route::get('/admin/add', 'AdminController@AddProductView')->name('add');

    Route::post('/admin/add', 'AdminController@AddProduct');
});

Route::name('customer.')->group(function()
{
    Route::view('/private','private')->middleware('auth')->name('private');
    Route::get('/login', 'Auth\LoginController@getForm')->name('login');
    Route::get('/registration', 'Auth\RegisterController@getForm')->name('registration');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/registration','Auth\RegisterController@save');
});


//Debug
Route::get('/ddS','MainController@ddS');
Route::get('/cS','MainController@cS');
