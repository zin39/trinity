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
        Schema::create('applications', function (Blueprint $table) {

            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('contact_mode')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('have_whatsapp')->default(false);
            $table->string('social_media_profile')->nullable();
            $table->string('currently_working_country')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->boolean('are_you_nurse')->default(false);
            $table->integer('years_of_experience')->default(false);
            $table->string('country_of_education')->nullable();
            $table->string('initial_education_program')->nullable();
            $table->string('university_name')->nullable();
            $table->string('date_of_graduation')->nullable();
            $table->json('qualifications')->nullable();
            $table->string('specialities')->nullable();
            $table->string('english_proficiency_test')->default(false);
            $table->boolean('is_pass_CGFNS')->default(false);
            $table->boolean('is_pass_NCLEX')->default(false);
            $table->text('hear_about_us')->nullable();
            $table->text('resume')->nullable();
            $table->text('unofficial_transcript')->nullable();
            $table->boolean('has_checked_privacy_statement')->default(false);
            $table->string('signature_name')->nullable();
            $table->boolean('has_checked_recieve_application_updates')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
