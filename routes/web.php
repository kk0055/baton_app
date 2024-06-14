<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\LandingPageController;


Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/property', [LandingPageController::class, 'property'])->name('landing.property');
Route::get('/about', [LandingPageController::class, 'about'])->name('landing.about');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', PropertyController::class);
});