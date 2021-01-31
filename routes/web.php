<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin', 'LoginController@index');
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'namespace' => 'FrontOffice'], function() {
    Route::get('/', 'WelcomeController@index')->name('front.home');
    Route::get('/about', 'AboutController@index')->name('front.about');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
    Route::get('/registration', 'RegistrationController@index')->name('front.registration');
    Route::get('/privacypolicy', 'PrivacyPolicyController@index')->name('front.privacypolicy');
    
    Route::get('/jobseeker', 'Auth\JobSeekerController@index');
    Route::post('/jobseekerlogin', 'Auth\JobSeekerController@login')->name('front.jobseekerlogin');
    Route::group(['middleware' => 'auth', 'jobseeker'], function () {
        Route::get('/jobseeker', function(){
            return view('front_office.welcome.jobseeker-index');
        });
    });

    Route::get('/company', 'Auth\CompanyController@index');
    Route::post('/companylogin', 'Auth\CompanyController@login')->name('front.companylogin');
    Route::group(['middleware' => 'auth', 'company'], function () {
        Route::get('/company', function(){
            return view('front_office.welcome.company-index');
        });
    });

    Route::get('/individual', 'Auth\IndividualController@index');
    Route::post('/individuallogin', 'Auth\IndividualController@login')->name('front.individuallogin');
    Route::group(['middleware' => 'auth', 'individual'], function () {
        Route::get('/individual', function(){
            return view('front_office.welcome.individual-index');
        });
    });

    Route::any('/logout', 'HomeController@logout')->name('front.logout');

    Route::post('/jobseeker', 'Auth\JobSeekerController@registration');
    Route::post('/individual', 'Auth\IndividualController@registration');
    Route::post('/company', 'Auth\CompanyController@registration');
});

Auth::routes();
