<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {

    return 'Welcome to Laravel From Docker !';
});

Route::get('sendemail', 'EmailController@sendEmail');
