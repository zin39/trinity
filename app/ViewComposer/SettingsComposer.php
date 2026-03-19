<?php

namespace App\ViewComposer;

use App\Models\Setting;
use Illuminate\View\View;

class SettingsComposer
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
        $setting = Setting::first() ?? new Setting();
        if(!$setting->company_logo) $setting->company_logo = 'frontend-assets/img/thiswebsite_logo.png';
        if(!$setting->company_name) $setting->company_name = env('APP_NAME');
        
        $view->with('setting', $setting);
    }
}