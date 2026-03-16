<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            $table->string('country')->nullable()->after('area_of_enquiry');
            $table->string('organisation')->nullable()->after('country');
            $table->string('enquiry_type')->nullable()->after('organisation');
        });
    }

    public function down(): void
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            $table->dropColumn(['country', 'organisation', 'enquiry_type']);
        });
    }
};
