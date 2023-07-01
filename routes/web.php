<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\FamilyDetailController;
use App\Http\Controllers\BusinessDetailController;
use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DisplayDetailsController;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');
Route::post('/userForm', [UserDetailController::class, 'store']);
Route::post('/familyForm', [FamilyDetailController::class, 'store']);
Route::post('/businessForm', [BusinessDetailController::class, 'store']);
Route::get('/displayDetails', [DisplayDetailsController::class, 'show']);
Route::get('/event', [CreateEventController::class, 'show']);

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});
