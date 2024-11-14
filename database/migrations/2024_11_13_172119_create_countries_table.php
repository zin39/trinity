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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('iso_alpha2', 2)->unique();  // ISO Alpha-2 code
            $table->string('iso_alpha3', 3)->unique();  // ISO Alpha-3 code
            $table->string('iso_numeric', 3)->unique(); // ISO numeric code
            $table->string('flag');  // Flag URL or file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
