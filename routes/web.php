<?php
use App\Http\Controllers\FrontOffice;
use App\Http\Livewire;
use Illuminate\Support\Facades\Route;

Route::get('/admin', 'LoginController@index');
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'namespace' => 'FrontOffice'], function() {
    Route::get('/', [ FrontOffice\WelcomeController::class, 'index' ])->name('front.home');
    Route::get('/about', [ FrontOffice\AboutController::class, 'index' ])->name('front.about');
    Route::get('/contact', [ FrontOffice\ContactController::class, 'index' ])->name('front.contact');
    Route::get('/registration', [ FrontOffice\RegistrationController::class, 'index' ])->name('front.registration');
    Route::get('/privacypolicy', [ FrontOffice\PrivacyPolicyController::class, 'index' ])->name('front.privacypolicy');
    
    Route::get('/jobseeker', [ FrontOffice\Auth\JobSeekerController::class, 'index' ]);
    Route::post('/jobseekerlogin', [ FrontOffice\Auth\JobSeekerController::class, 'login' ])->name('front.jobseekerlogin');
    Route::group(['middleware' => 'auth', 'jobseeker'], function () {
        Route::get('/jobseeker', function(){
            return view('front_office.welcome.jobseeker-index');
        });
    });

    Route::get('/company', [ FrontOffice\Auth\CompanyController::class, 'index' ]);
    Route::post('/companylogin', [ FrontOffice\Auth\CompanyController::class, 'login' ])->name('front.companylogin');
    Route::group(['middleware' => 'auth', 'company'], function () {
        Route::get('/company', function(){
            return view('front_office.welcome.company-index');
        });
    });

    Route::get('/individual', [ FrontOffice\Auth\IndividualController::class, 'index' ]);
    Route::post('/individuallogin', [ FrontOffice\Auth\IndividualController::class, 'login' ])->name('front.individuallogin');
    Route::group(['middleware' => 'auth', 'individual'], function () {
        Route::get('/individual', function(){
            return view('front_office.welcome.individual-index');
        });
    });

    Route::any('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('front.logout');

    Route::post('/jobseeker', [ FrontOffice\Auth\JobSeekerController::class, 'registration' ]);
    Route::post('/individual', [ FrontOffice\Auth\IndividualController::class, 'registration' ]);
    Route::post('/company', [ FrontOffice\Auth\CompanyController::class, 'registration' ]);

    Route::post('/closesigninmodal', function(){
        Session::forget('SigninModal');
        $response = array(
            'status' => 'success'
        );
        return $response;
    });

});

Route::get('{language}/candidates', Livewire\Candidates::class)->name('front.candidates');
Route::get('{language}/sectors', Livewire\Sectors::class)->name('front.sectors');

Auth::routes();
