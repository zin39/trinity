<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $slugs = [
            'home-about-short',
            'candidate-hero',
            'candidate-pathways',
            'candidate-values',
            'candidate-services',
            'employer-hero',
            'employer-partnerships',
            'employer-values',
            'employer-preparation',
            'employer-workforce',
            'employer-cta',
            'testimonials-hero',
        ];

        foreach ($slugs as $slug) {
            DB::table('page_sections')->insertOrIgnore([
                'slug' => $slug,
                'content' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        DB::table('page_sections')->whereIn('slug', [
            'home-about-short',
            'candidate-hero', 'candidate-pathways', 'candidate-values', 'candidate-services',
            'employer-hero', 'employer-partnerships', 'employer-values', 'employer-preparation',
            'employer-workforce', 'employer-cta',
            'testimonials-hero',
        ])->delete();
    }
};
