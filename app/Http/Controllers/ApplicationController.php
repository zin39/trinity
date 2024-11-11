<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
   public function store(Request $request) {
        # code...

        $validatedData = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'contact_mode' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'whatsapp_phone_number' => 'nullable|boolean',
            'social_media_profile' => 'nullable|string|max:255',
            'currently_working_country' => 'nullable|string|max:255',
            'country_of_birth' => 'nullable|string|max:255',
            'working_status' => 'nullable|boolean',
            'years_of_experience' => 'nullable|integer',
            'country_of_education' => 'nullable|string|max:255',
            'initial_education_program' => 'nullable|string|max:255',
            'university_name' => 'nullable|string|max:255',
            'date_of_gratudation' => 'nullable|string|max:255',
            'qualifications' => 'nullable|array',
            'specialities' => 'nullable|boolean',
            'english_proficiency_test' => 'nullable|boolean',
            'is_pass_CGFNS' => 'nullable|boolean',
            'is_passed_NCLEX' => 'nullable|boolean',
            'hear_about_us' => 'nullable|string',
            'resume' => 'nullable|string',
            'unofficial_transcript' => 'nullable|string',
            'privacy_statement' => 'nullable|boolean',
            'name' => 'nullable|string',
            'recieve_application_updates' => 'nullable|boolean'
        ]);

        $application= new Application;

        $application->first_name = $request->input('first_name');
        $application->last_name= $request->input('last_name');
        $application->contact_mode= $request->input('contact_mode');
        $application->email= $request->input('email');
        $application->phone_number = $request->input('phone_number');
        $application->whatsapp_phone_number= $request->has('whatsapp_phone_number');
        $application->social_media_profile = $request->input('social_media_profile');
        $application->currently_working_country = $request->input('currently_working_country');
        $application->country_of_birth = $request->input('country_of_birth');
        $application->date_of_birth= $request->input('date_of_birth');
        $application->working_status = $request->has('working_status');
        $application->years_of_experience = $request->has('years_of_experience');
        $application->country_of_education = $request->input('country_of_education');
        $application->initial_education_program = $request->input('initial_education_program');
        $application->university_name = $request->input('university_name');
        $application->date_of_gratudation = $request->input('date_of_gratudation');
        $application->qualifications = json_encode($request->input('qualifications',[]));
        $application->specialities = $request->has('specialities');
        $application->english_proficiency_test = $request->has('english_proficiency_test');
        $application->is_pass_CGFNS = $request->has('is_pass_CGFNS');
        $application->is_passed_NCLEX = $request->has('is_passed_NCLEX');
        $application->hear_about_us = $request->input('hear_about_us');
        $application->resume = $request->input('resume');
        $application->unofficial_transcript = $request->input('unofficial_transcript');
        $application->privacy_statement = $request->has('privacy_statement') ? true : false ;
        $application->name = $request->input('name');
        $application->recieve_application_updates = $request->has('recieve_application_updates') ? true: false;

        if ($application->save())
        {
            return redirect()->route('apply.now.view')->with('status', 'Application Data has been saved');
        } else
        {
            return redirect()->back()->with('error', 'Failed to save the application data');
        }
    }



}


