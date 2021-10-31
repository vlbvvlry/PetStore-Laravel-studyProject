<?php

Route::get('/', 'MainController@Home');
Route::get('/home', 'MainController@Home');
Route::get('/items', 'MainController@ItemView');

//Route Group for auth/customers
Route::name('customer.')->group(function()
{
    Route::view('/private','private')->middleware('auth')->name('private');
    Route::get('/login', 'Auth\LoginController@getForm')->name('login');
    Route::get('/registration', 'Auth\RegisterController@getForm')->name('registration');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/registration','Auth\RegisterController@save');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});
