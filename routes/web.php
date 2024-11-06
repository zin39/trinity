<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/registered-nurses', [HomeController::class, 'registeredNurse']);

Route::get('/apply-now', [HomeController::class, 'applyNow']);

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);

Route::get('/healthcare-organizations', [HomeController::class, 'healthcareOrganizations']);

Route::get('/why-choose-us', [HomeController::class, 'whyChooseUs']);
