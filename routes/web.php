<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/registered-nurses', [HomeController::class, 'registeredNurse']);

Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('apply.now.view');
Route::post('/apply-now', [ApplicationController::class, 'store'])->name('apply.now');

Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);

Route::get('/healthcare-organizations', [HomeController::class, 'healthcareOrganizations']);

Route::get('/why-choose-us', [HomeController::class, 'whyChooseUs']);
