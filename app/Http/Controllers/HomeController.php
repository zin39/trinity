<?php

namespace App\Http\Controllers;

use App\Models\PageSection;

class HomeController extends Controller
{
    public function index()
    {
        $sections = PageSection::whereIn('slug', [
            'home-hero', 'home-intro', 'home-why-choose-us', 'home-services-preview', 'home-closing-cta',
        ])->pluck('content', 'slug');

        return view('frontend.index', compact('sections'));
    }

    public function about()
    {
        $sections = PageSection::whereIn('slug', [
            'about-main', 'about-mission', 'about-vision', 'about-values',
        ])->pluck('content', 'slug');

        return view('frontend.about', compact('sections'));
    }

    public function services()
    {
        $sections = PageSection::whereIn('slug', [
            'services-main', 'services-items', 'services-cta',
        ])->pluck('content', 'slug');

        return view('frontend.services', compact('sections'));
    }

    public function informationSessions()
    {
        $sections = PageSection::whereIn('slug', [
            'info-sessions-main', 'info-sessions-graduates', 'info-sessions-nursing', 'info-sessions-cta',
        ])->pluck('content', 'slug');

        return view('frontend.information_sessions', compact('sections'));
    }

    public function contact()
    {
        $sections = PageSection::whereIn('slug', [
            'contact-main', 'contact-details',
        ])->pluck('content', 'slug');

        return view('frontend.contact', compact('sections'));
    }

    public function privacyPolicy()
    {
        $sections = PageSection::whereIn('slug', [
            'privacy-policy-banner', 'privacy-policy-main-content',
        ])->pluck('content', 'slug');

        return view('frontend.privacy_policy', compact('sections'));
    }
}
