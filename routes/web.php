<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FrontOffice'], function() {
    Route::get('/', 'WelcomeController@index')->name('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
