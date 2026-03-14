<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            $table->string('area_of_enquiry')->nullable()->after('phone_number');
        });
    }

    public function down(): void
    {
        Schema::table('consultation_requests', function (Blueprint $table) {
            $table->dropColumn('area_of_enquiry');
        });
    }
};
