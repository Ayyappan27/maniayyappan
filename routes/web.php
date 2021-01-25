<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'namespace' => 'FrontOffice'], function() {
    Route::get('/', 'WelcomeController@index')->name('front.home');
    Route::get('/about', 'AboutController@index')->name('front.about');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
});

Auth::routes();
