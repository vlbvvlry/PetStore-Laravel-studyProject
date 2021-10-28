<?php

Route::get('/', 'MainController@Home');
Route::get('/home', 'MainController@Home');
Route::get('/items', 'MainController@ItemView');

Route::name('user.')->group(function()
{
   
    Route::view('/private','private')->middleware('auth')->name('private');
    Route::get('/login', function()
    {
        if(Auth::check())
        {
            return redirect(route('user.private'));
        }
        return view('auth.login');
    })->name('login');


    Route::get('/registration',function()
    {
        if(Auth::check())
        {
            return redirect(route('user.private'));
        }
        return view('auth.reg');
    })->name('registration');


    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/registration','Auth\RegisterController@save');
    Route::get('/logout',function()
    {
        Auth::logout();
        return redirect('home');
    })->name('logout');


});
