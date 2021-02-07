<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Dashboard'], function () {
    Config::set('auth.default', 'admin');
    // Authentication Routes
    Route::get('login', [Dashboard\Auth\LoginController::class, 'index']);
    Route::post('login', [Dashboard\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::any('/signout', [Dashboard\Auth\LoginController::class, 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'admin:admin'], function () {
        // Dashboard Route
        Route::get('/', [Dashboard\DashboardController::class, 'index']);

        // Users Routes
        Route::get('/users', [Dashboard\UserController::class, 'index']);
        Route::get('/users/{id}', [Dashboard\UserController::class, 'show']);
        Route::put('/users/{id}/update-status', [Dashboard\UserController::class, 'updateStatus']);

        // Mobile Links Apps Settings Routes
        Route::get('/apps/settings', [Dashboard\AppInfoController::class, 'index']);
        Route::put('/apps/settings/update', [Dashboard\AppInfoController::class, 'update'])->name('apps.update');

        // About Routes
        Route::get('/abouts', [Dashboard\AboutController::class, 'index']);
        Route::put('/about/update', [Dashboard\AboutController::class, 'update'])->name('about.update');

        // Contact Routes
        Route::get('/contacts', [Dashboard\ContactController::class, 'index']);
        Route::put('/contacts/update', [Dashboard\ContactController::class, 'update'])->name('contacts.update');

        // Terms & Conditions Routes
        Route::get('/terms', [Dashboard\TermsconditionController::class, 'index']);
        Route::put('/terms/update', [Dashboard\TermsconditionController::class, 'update'])->name('terms.update');

        // Sectors Routes
        Route::get('/sectors-list', [Dashboard\SectorController::class, 'index']);
        Route::get('/sectors/create', [Dashboard\SectorController::class, 'create']);
        Route::post('/sectors/store', [Dashboard\SectorController::class, 'store'])->name('sectors.store');
        Route::get('/sectors/{id}/edit', [Dashboard\SectorController::class, 'edit'])->name('sectors.edit');
        Route::put('/sectors{id}/update', [Dashboard\SectorController::class, 'update'])->name('sectors.update');
        Route::delete('/sectors/{id}/delete', [Dashboard\SectorController::class, 'delete'])->name('sectors.delete');
    });
});
