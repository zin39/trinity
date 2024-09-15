<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::insert([
            [
                'title' => 'Jobs in the Australia',
                'slug' => 'jobs-in-australia',
                'content' => ''
            ],
            [
                'title' => 'Who We Are',
                'slug' => 'who-we-are',
                'content' => ''
            ],
            [
                'title' => 'Why Trnty',
                'slug' => 'why-trnty',
                'content' => ''
            ],
            [
                'title' => 'How to Qualify',
                'slug' => 'how-to-qualify',
                'content' => ''
            ],
            [
                'title' => 'The Process',
                'slug' => 'the-process',
                'content' => ''
            ], 
            [
                'title' => 'Referral Bonuses Program',
                'slug' => 'referral-bonuses-program',
                'content' => ''
            ],
            [
                'title' => '#IamTrnty',
                'slug' => 'i-am-trnty',
                'content' => ''
            ],
            [
                'title' => 'Apply Now',
                'slug' => 'apply-now',
                'content' => ''
            ],
            [
                'title' => 'Staffing Solutions',
                'slug' => 'staffing-solutions',
                'content' => ''
            ],
            [
                'title' => 'The Trnty Difference',
                'slug' => 'the-trnty-difference',
                'content' => ''
            ], 
            [
                
                'title' => 'Meeting the Nursing Shortage',
                'slug' => 'meeting-the-nursing-shortage',
                'content' => ''
            ],
            [
                
                'title' => 'Success Stories',
                'slug' => 'success-stories',
                'content' => ''
            ],
            [
                
                'title' => 'Contact Us',
                'slug' => 'contact-us',
                'content' => ''
            ],
            [
                
                'title' => 'Overview',
                'slug' => 'about-us',
                'content' => ''
            ],
            [
                
                'title' => 'Our Core Values',
                'slug' => 'our-core-values',
                'content' => ''
            ],
            [
                
                'title' => 'Joint Commission Certified',
                'slug' => 'joint-commission-certified',
                'content' => ''
            ],
            [
                
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => ''
            ],
        ]);
    }
}
