<?php

use App\Http\Controllers\ApplyNow;
use App\Http\Controllers\HealthcareOrganizations;
use App\Http\Controllers\PrivacyPolicy;
use App\Http\Controllers\RegisteredNurse;
use App\Http\Controllers\WhyChooseUs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/registered_nurses', [RegisteredNurse::class, 'show']);

Route::get('/apply_now', [ApplyNow::class, 'show']);

Route::get('/privacy_policy', [PrivacyPolicy::class, 'show']);

Route::get('/healthcare_organizations', [HealthcareOrganizations::class, 'show']);

Route::get('/why_choose_us', [WhyChooseUs::class, 'show']);
