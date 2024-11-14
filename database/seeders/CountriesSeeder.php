<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Rinvex\Country\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();

        foreach ($countries as $country) {
            \DB::table('countries')->insert([
                'name' => $country->get('name'),
                'iso_alpha2' => $country->get('iso_alpha2'),
                'iso_alpha3' => $country->get('iso_alpha3'),
                'iso_numeric' => $country->get('iso_numeric'),
                'flag' => $country->get('flag'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }       //
    }
}
