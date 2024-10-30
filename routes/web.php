<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/registered_nurses', [HomeController::class, 'registeredNurse']);

Route::get('/apply_now', [HomeController::class, 'applyNow']);

Route::get('/privacy_policy', [HomeController::class, 'privacyPolicy']);

Route::get('/healthcare_organizations', [HomeController::class, 'healthcareOrganizations']);

Route::get('/why_choose_us', [HomeController::class, 'whyChooseUs']);
