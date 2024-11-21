<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthController;


Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/rent', [LandingPageController::class, 'rent'])->name('landing.rent');
Route::post('/properties/search', [LandingPageController::class, 'ajaxSearch'])->name('properties.search');
Route::get('/company', [LandingPageController::class, 'company'])->name('landing.company');
Route::get('/message', [LandingPageController::class, 'message'])->name('landing.message');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', PropertyController::class);
    Route::resource('post', PostController::class);
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);

Route::get('/is_brokerage_free', [LandingPageController::class, 'isBrokerageFree'])->name('landing.isBrokerageFree');
Route::get('/sale', [LandingPageController::class, 'sale'])->name('landing.sale');