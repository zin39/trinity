<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        // User::factory(10)->create();
        \DB::table('admins')->insert([
            'name' => 'admin1',
            'email' => 'admin1@admin.com',
            'password' => bcrypt('admin1admin'),
        ]);
        // $this->call(PageSeeder::class);
        $this->call(PageSectionSeeder::class);
    }
}
