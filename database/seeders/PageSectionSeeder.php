<?php

namespace Database\Seeders;

use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!PageSection::where('slug', 'home-banner-area' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'home-banner-area',
                    'content' => null
                ],
            ]); 
        }



        if(!PageSection::where('slug', 'home-nurses-testimonials-area' )->exists())
        {
            PageSection::insert([
            [
                'slug' => 'home-nurses-testimonials-area',
                'content' => null
            ],
            ]); 
        }

        if(!PageSection::where('slug', 'home-registered-nurse-take-step' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'home-registered-nurse-take-step',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'home-membership-previllage' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'home-membership-previllage',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'home-latest-news' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'home-latest-news',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'home-how-to-get-started' )->exists())
        {
            PageSection::insert([
            [
                'slug' => 'home-how-to-get-started',
                'content' => null
                ],
            ]); 
        }


        if(!PageSection::where('slug', 'footer-about-text' )->exists())
        {
            PageSection::insert([
            [
                'slug' => 'footer-about-text',
                'content' => null
            ],
            ]); 
        }

        if(!PageSection::where('slug', 'registered-nurse-banner' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'registered-nurse-banner',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'registered-nurse-main-content' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'registered-nurse-main-content',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'registered-nurse-how-to-qualify' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'registered-nurse-how-to-qualify',
                    'content' => null
                ],
            ]); 
        }


        if(!PageSection::where('slug', 'registered-nurse-membership-previllage' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'registered-nurse-membership-previllage',
                    'content' => null
                ],
            ]); 
        }


        if(!PageSection::where('slug', 'registered-nurse-how-to-get-started' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'registered-nurse-how-to-get-started',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'healthcare-organizations-banner' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'healthcare-organizations-banner',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'healthcare-organizations-main-content' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'healthcare-organizations-main-content',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'healthcare-organizations-membership-previllage' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'healthcare-organizations-membership-previllage',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'healthcare-organizations-how-to-get-started' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'healthcare-organizations-how-to-get-started',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'why-choose-us-banner' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'why-choose-us-banner',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'why-choose-us-main-content' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'why-choose-us-main-content',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'why-choose-us-apply-section' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'why-choose-us-apply-section',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'why-choose-us-membership-previllage' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'why-choose-us-membership-previllage',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'privacy-policy-banner' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'privacy-policy-banner',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'privacy-policy-main-content' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'privacy-policy-main-content',
                    'content' => null
                ],
            ]); 
        }


        if(!PageSection::where('slug', 'privacy-policy-apply-section' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'privacy-policy-apply-section',
                    'content' => null
                ],
            ]); 
        }

        if(!PageSection::where('slug', 'apply-now-banner' )->exists())
        {
            PageSection::insert([
                [
                    'slug' => 'apply-now-banner',
                    'content' => null
                ],
            ]); 
        }

         
    }
}
