<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'application';

    protected $fillable = [
        'first_name', 'last_name', 'contact_mode', 'email', 'phone_number',
        'whatsapp_phone_number', 'social_media_profile', 'currently_working_country',
        'country_of_birth', 'date_of_birth', 'working_status', 'years_of_experience',
        'country_of_education', 'initial_education_program', 'university_name',
        'date_of_gratudation', 'qualifications', 'specialities',
        'english_proficiency_test', 'is_pass_CGFNS', 'is_passed_NCLEX',
        'hear_about_us', 'resume', 'unofficial_transcript', 'privacy_statement',
        'recieve_application_updates'
    ];
    protected $casts = [
        'whatsapp_phone_number' => 'boolean',
        'working_status' => 'boolean',
        'specialities' => 'boolean',
        'english_proficiency_test' => 'boolean',
        'is_pass_CGFNS' => 'boolean',
        'is_passed_NCLEX' => 'boolean',
        'privacy_statement' => 'boolean',
        'recieve_application_updates' => 'boolean',
    ];

}
