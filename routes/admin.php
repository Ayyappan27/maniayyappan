<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Dashboard'], function() {
    Config::set('auth.default', 'admin');
    Route::get('login', 'Auth\LoginController@index');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::any('/signout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' =>'admin:admin'], function() {
        Route::get('/', function () {
            return view('dashboard.pages.dashboard.index');
        });
    });

    
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/userlist', 'UserlistController@index');
    Route::get('/helpandinfo', 'HelpandinfoController@index');
    Route::get('/aboutus', 'AboutusController@index');
    Route::get('/contactus', 'ContactusController@index');
    Route::get('/termsandcondition', 'TermsandconditionController@index');
});