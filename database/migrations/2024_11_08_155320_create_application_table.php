<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('application', function (Blueprint $table) {

            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_mode')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('whatsapp_phone_number')->default(false);
            $table->string('social_media_profile')->nullable();
            $table->string('currently_working_country')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->boolean('working_status')->default(false);
            $table->boolean('years_of_experience')->default(false);
            $table->string('country_of_education')->nullable();
            $table->string('initial_education_program')->nullable();
            $table->string('university_name')->nullable();
            $table->date('date_of_gratudation')->nullable();
            $table->json('qualifications')->nullable();
            $table->boolean('specialities')->default(false);
            $table->boolean('english_proficiency_test')->default(false);
            $table->boolean('is_pass_CGFNS')->default(false);
            $table->boolean('is_passed_NCLEX')->default(false);
            $table->longtext('hear_about_us')->nullable();
            $table->string('resume')->nullable();
            $table->string('unofficial_transcript')->nullable();
            $table->boolean('privacy_statement')->default(false);
            $table->string('name')->nullable();
            $table->boolean('recieve_application_updates')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
