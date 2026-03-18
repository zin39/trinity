<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PageSeeder::class);
        $this->call(PageSectionSeeder::class);
        $this->call(TestimonialSeeder::class);

        // Create default admin user
        Admin::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );

        // Create default settings
        Setting::firstOrCreate(
            ['id' => 1],
            [
                'company_name' => 'Karissa Subedi Career Consultancy Services',
                'company_logo' => null,
                'company_copyright' => '© Karissa Subedi Career Consultancy Services',
                'contact_no1' => '+61 000 000 000',
                'contact_no2' => null,
                'address1' => 'Australia',
                'address2' => null,
                'postcode' => null,
                'company_email' => 'info@karissasubedi.com.au',
                'facebook_link' => '#',
                'instagram_link' => '#',
                'linkin_link' => '#',
                'twitter_link' => '#',
                'youtube_link' => '#',
                'tiktok_link' => '#',
            ]
        );
    }
}
