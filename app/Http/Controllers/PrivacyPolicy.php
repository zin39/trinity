<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicy extends Controller
{
    public function show()
    {
        return view('frontend.privacy_policy');
    }
    //
}
