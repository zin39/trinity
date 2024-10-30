<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function registeredNurse()
    {
        return view('frontend.registered_nurse');
    }

    public function applyNow()
    {
        return view('frontend.apply_now');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function healthcareOrganizations()
    {
        return view('frontend.healthcare_organizations');
    }

    public function whyChooseUs()
    {
        return view('frontend.why_choose_us');
    }
}
