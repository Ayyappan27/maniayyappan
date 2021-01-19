<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front_office.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
