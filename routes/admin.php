<?php
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Dashboard'], function() {
    Config::set('auth.default', 'admin');
    Route::get('login', [ Dashboard\Auth\LoginController::class, 'index' ]);
    Route::post('login', [ Dashboard\Auth\LoginController::class, 'login' ])->name('admin.login');
    Route::any('/signout', [ Dashboard\Auth\LoginController::class, 'logout' ])->name('admin.logout');

    Route::group(['middleware' =>'admin:admin'], function() {
        Route::get('/', function () {
            return view('dashboard.pages.dashboard.index');
        });
    });

    Route::get('/dashboard', [ Dashboard\DashboardController::class, 'index' ]);
    Route::get('/users', [ Dashboard\UserlistController::class, 'index' ]);
    Route::get('/helpandinfo', [ Dashboard\HelpandinfoController::class, 'index' ]);
    Route::get('/aboutus', [ Dashboard\AboutusController::class, 'index' ]);
    Route::get('/contactus', [ Dashboard\ContactusController::class, 'index' ]);
    Route::get('/termsandcondition', [ Dashboard\TermsandconditionController::class, 'index' ]);
    Route::get('/sectors', [ Dashboard\SectorController::class, 'index' ]);
    Route::get('/sectorform', [ Dashboard\SectorController::class, 'sectorform' ]);
    Route::get('/editsectorform/{id}', [ Dashboard\SectorController::class, 'editsectorform' ]);
    Route::get('/deletesectorform/{id}', [ Dashboard\SectorController::class, 'deletesectorform' ]);

    Route::post('/update_about', [ Dashboard\AboutusController::class, 'update_about' ]);
    Route::post('/update_contact', [ Dashboard\ContactusController::class, 'update_contact' ]);
    Route::post('/update_termsandcondition', [ Dashboard\TermsandconditionController::class, 'update_termsandcondition' ]);
    Route::post('/add_sector', [ Dashboard\SectorController::class, 'add_sector' ]);
    Route::post('/edit_sector', [ Dashboard\SectorController::class, 'edit_sector' ])->name('admin.edit_sector');

    Route::post('/updateuserstatus', [ Dashboard\UserlistController::class, 'updatestatus' ]);
    Route::get('/getuser', [ Dashboard\UserlistController::class, 'user' ]);
    Route::get('/appinfo', [ Dashboard\appinfoController::class, 'index' ]);
    Route::post('/update_appinfo', [ Dashboard\appinfoController::class, 'update_appinfo' ]);

});