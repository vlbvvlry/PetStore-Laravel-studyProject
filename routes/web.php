<?php

Route::get('/', 'MainController@Home');
Route::get('/home', 'MainController@Home');
Route::get('/reg', 'MainController@Reg');
Route::get('/login', 'MainController@Login');
