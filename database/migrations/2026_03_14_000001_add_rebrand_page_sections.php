<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $slugs = [
            'home-hero',
            'home-intro',
            'home-why-choose-us',
            'home-services-preview',
            'home-closing-cta',
            'about-main',
            'about-mission',
            'about-vision',
            'about-values',
            'services-main',
            'services-items',
            'services-cta',
            'info-sessions-main',
            'info-sessions-graduates',
            'info-sessions-nursing',
            'info-sessions-cta',
            'contact-main',
            'contact-details',
            'footer-brand',
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
            'home-hero', 'home-intro', 'home-why-choose-us', 'home-services-preview',
            'home-closing-cta', 'about-main', 'about-mission', 'about-vision',
            'about-values', 'services-main', 'services-items', 'services-cta',
            'info-sessions-main', 'info-sessions-graduates', 'info-sessions-nursing',
            'info-sessions-cta', 'contact-main', 'contact-details', 'footer-brand',
        ])->delete();
    }
};
