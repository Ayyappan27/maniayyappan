<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/hi');

Route::group(['prefix' => '{language}', 'namespace' => 'FrontOffice'], function() {
    Route::get('/', 'WelcomeController@index')->name('front.home');
    Route::get('/about', 'AboutController@index')->name('front.about');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::get('/registration', 'RegistrationController@index')->name('front.registration');
    Route::get('/privacypolicy', 'PrivacyPolicyController@index')->name('front.privacypolicy');
});

Auth::routes(); 
