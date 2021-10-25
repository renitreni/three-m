<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SettingsPrivacyController;
use App\Http\Controllers\DefaultsController;

Auth::routes();

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [HomePageController::class, 'landing'])->name('landing');
    Route::get('/booking', [HomePageController::class, 'booking'])->name('booking');
    Route::post('/reserve', [HomePageController::class, 'reserve'])->name('reserve');
    Route::get('/text/message/{number}/{message}', [HomePageController::class, 'itexmo'])->name('text.message');
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::prefix('services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('services');
        Route::post('/table', [ServiceController::class, 'table'])->name('services.table');
        Route::post('/store', [ServiceController::class, 'store'])->name('services.store');
        Route::post('/delete', [ServiceController::class, 'destroy'])->name('services.delete');
        Route::post('/cars', [ServiceController::class, 'cars'])->name('services.table.cars');
        Route::post('/car/store', [ServiceController::class, 'carStore'])->name('car.store');
        Route::post('/car/delete', [ServiceController::class, 'carDestroy'])->name('car.delete');
    });
    Route::prefix('admin')->group(function () {
        Route::post('/sidebar', [DefaultsController::class, 'sidebar'])->name('sidebar');
        Route::post('/footer', [DefaultsController::class, 'footer'])->name('footer');
        Route::post('/top-bar', [DefaultsController::class, 'topBar'])->name('top-bar');
    });
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
    });
    Route::prefix('reservation')->group(function () {
        Route::get('/', [ReservationController::class, 'index'])->name('reservation');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users')->middleware(['can:users']);
        Route::post('/table', [UsersController::class, 'usersTable'])->name('users.table');
        Route::post('/update', [UsersController::class, 'update'])->name('users.update');
        Route::post('/store', [UsersController::class, 'store'])->name('users.store');
        Route::post('/cp', [UsersController::class, 'changePassword'])->name('users.cp');
        Route::post('/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->name('roles')->middleware(['can:roles']);
        Route::post('/store', [RolesController::class, 'store'])->name('roles.store');
        Route::post('/update', [RolesController::class, 'update'])->name('roles.update');
        Route::post('/destroy', [RolesController::class, 'destroy'])->name('roles.delete');
        Route::post('/table', [RolesController::class, 'table'])->name('roles.table');
    });
    Route::prefix('settings-privacy')->group(function () {
        Route::get('/', [SettingsPrivacyController::class, 'index'])->name('settings-privacy');
        Route::post('/upload-photo', [SettingsPrivacyController::class, 'uploadPhoto'])->name('settings-privacy.up');
    });
});
