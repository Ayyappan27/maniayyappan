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
    Route::get('/users', 'UserlistController@index');
    Route::get('/helpandinfo', 'HelpandinfoController@index');
    Route::get('/aboutus', 'AboutusController@index');
    Route::get('/contactus', 'ContactusController@index');
    Route::get('/termsandcondition', 'TermsandconditionController@index');
    Route::get('/sectors', 'SectorController@index');
    Route::get('/sectorform', 'SectorController@sectorform');
    Route::get('/editsectorform/{id}', 'SectorController@editsectorform');
    Route::get('/deletesectorform/{id}', 'SectorController@deletesectorform');

    Route::post('/update_about', 'AboutusController@update_about');
    Route::post('/update_contact', 'ContactusController@update_contact');
    Route::post('/update_termsandcondition', 'TermsandconditionController@update_termsandcondition');
    Route::post('/add_sector', 'SectorController@add_sector');
    Route::post('/edit_sector', 'SectorController@edit_sector')->name('admin.edit_sector');

    Route::post('/updateuserstatus', 'UserlistController@updatestatus');
    Route::get('/getuser', 'UserlistController@getuser');

});