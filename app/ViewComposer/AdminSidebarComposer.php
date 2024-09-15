<?php

namespace App\ViewComposer;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\View\View;

class AdminSidebarComposer
{

    /**
     * Create a new categories composer.
     *
     * @param  CategoryRepository $categories
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function create(View $view)
    {
        $all_pages = Page::select('id', 'slug', 'title')->get();
        $pages = [
            'healthcare-professionals' => collect([
                $all_pages->where('slug', 'jobs-in-australia')->first(),
                $all_pages->where('slug', 'who-we-are')->first(),
                $all_pages->where('slug', 'why-trnty')->first(),
                $all_pages->where('slug', 'how-to-qualify')->first(),
                $all_pages->where('slug', 'the-process')->first(),
                $all_pages->where('slug', 'referral-bonuses-program')->first(),
                $all_pages->where('slug', 'i-am-trnty')->first(),
                $all_pages->where('slug', 'apply-now')->first()
            ]),
            'healthcare-organizations' => collect([
                $all_pages->where('slug', 'staffing-solutions')->first(),
                $all_pages->where('slug', 'the-trnty-difference')->first(),
                $all_pages->where('slug', 'meeting-the-nursing-shortage')->first(),
                $all_pages->where('slug', 'success-stories')->first(),
                $all_pages->where('slug', 'contact-us')->first()
            ]),
            'other' => collect([
                $all_pages->where('slug', 'about-us')->first(),
                $all_pages->where('slug', 'our-core-values')->first(),
                $all_pages->where('slug', 'joint-commission-certified')->first(),
                $all_pages->where('slug', 'privacy-policy')->first()
            ])
        ];
        
        $view->with('pages', $pages);
    }
}