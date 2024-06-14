<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/rent', [LandingPageController::class, 'rent'])->name('landing.rent');
Route::get('/sale', [LandingPageController::class, 'sale'])->name('landing.sale');
Route::get('/company', [LandingPageController::class, 'company'])->name('landing.company');
Route::get('/about', [LandingPageController::class, 'about'])->name('landing.about');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', PropertyController::class);
});