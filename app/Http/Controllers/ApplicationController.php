<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
   public function store(Request $request) {
        # code...

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_mode' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'have_whatsapp' => 'required|boolean',
            'social_media_profile' => 'nullable|string|max:255',
            'currently_working_country' => 'required|string|max:255',
            'country_of_birth' => 'required|string|max:255',
            'are_you_nurse' => 'required|boolean',
            'years_of_experience' => 'required|integer',
            'country_of_education' => 'required|string|max:255',
            'initial_education_program' => 'required|string|max:255',
            'university_name' => 'required|string|max:255',
            'date_of_graduation' => 'required|string|max:255',
            'qualifications' => 'nullable|array',
            'specialities' => 'required|boolean',
            'english_proficiency_test' => 'required|boolean',
            'is_pass_CGFNS' => 'required|boolean',
            'is_pass_NCLEX' => 'required|boolean',
            'hear_about_us' => 'required|string',
            'resume' => 'required|file|mimes:jpg,jpeg,png,docx,pdf',
            'unofficial_transcript' => 'nullable|file|mimes:jpg,jpeg,png,docx,pdf',
            'has_checked_privacy_statement' => 'required|boolean',
            'signature_name' => 'required|string',
            'has_checked_recieve_application_updates' => 'required|boolean'
        ]);

        $application= new Application;

        $application->first_name = $request->input('first_name');
        $application->last_name= $request->input('last_name');
        $application->contact_mode= $request->input('contact_mode');
        $application->email= $request->input('email');
        $application->phone_number = $request->input('phone_number');
        $application->have_whatsapp= $request->input('have_whatsapp');
        $application->social_media_profile = $request->input('social_media_profile');
        $application->currently_working_country = $request->input('currently_working_country');
        $application->country_of_birth = $request->input('country_of_birth');
        $application->date_of_birth= $request->input('date_of_birth');
        $application->are_you_nurse = $request->input('are_you_nurse');
        $application->years_of_experience = $request->input('years_of_experience');
        $application->country_of_education = $request->input('country_of_education');
        $application->initial_education_program = $request->input('initial_education_program');
        $application->university_name = $request->input('university_name');
        $application->date_of_graduation = $request->input('date_of_graduation');
        $application->qualifications = json_encode($request->input('qualifications',[]));
        $application->specialities = $request->input('specialities');
        $application->english_proficiency_test = $request->has('english_proficiency_test');
        $application->is_pass_CGFNS = $request->input('is_pass_CGFNS');
        $application->is_pass_NCLEX = $request->input('is_pass_NCLEX');
        $application->hear_about_us = $request->input('hear_about_us');
        $application->has_checked_privacy_statement = $request->has('has_checked_privacy_statement') ? true : false ;
        $application->signature_name = $request->input('signature_name');
        $application->has_checked_recieve_application_updates = $request->has('has_checked_recieve_application_updates') ? true: false;
        
        if($request->file('resume')){
            $file = $request->file('resume');
            $resume = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $resume);
            $file->move(public_path() . '/uploads/form/', $fileName);
            $application->resume = $fileName;
        }

        if($request->file('unofficial_transcript')){
            $file = $request->file('resume');
            $resume = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $resume);
            $file->move(public_path() . '/uploads/form/', $fileName);
            $application->unofficial_transcript = $fileName;
        }
       


        $application->save();
        session()->flash('message', 'Content has been updated successfully');


        return redirect()->route('home');


    }



}


