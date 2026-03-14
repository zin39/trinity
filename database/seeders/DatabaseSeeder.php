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
                'company_name' => 'KariniStep',
                'company_logo' => null,
                'company_copyright' => '© KariniStep Pty Ltd',
                'contact_no1' => '+61 000 000 000',
                'contact_no2' => null,
                'address1' => 'Australia',
                'address2' => null,
                'postcode' => null,
                'company_email' => 'info@karinistep.com',
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
