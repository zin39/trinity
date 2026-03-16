<?php

namespace App\Http\Controllers;

use App\Models\PageSection;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $sections = PageSection::whereIn('slug', [
            'home-hero', 'home-about-short',
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

    public function candidate()
    {
        $sections = PageSection::whereIn('slug', [
            'candidate-hero', 'candidate-pathways', 'candidate-values', 'candidate-services',
        ])->pluck('content', 'slug');

        return view('frontend.candidate', compact('sections'));
    }

    public function employer()
    {
        $sections = PageSection::whereIn('slug', [
            'employer-hero', 'employer-partnerships', 'employer-values',
            'employer-preparation', 'employer-workforce', 'employer-cta',
        ])->pluck('content', 'slug');

        return view('frontend.employer', compact('sections'));
    }

    public function testimonials()
    {
        $sections = PageSection::whereIn('slug', [
            'testimonials-hero',
        ])->pluck('content', 'slug');

        $candidateTestimonials = Testimonial::where('status', 1)->candidate()->get();
        $employerTestimonials = Testimonial::where('status', 1)->employer()->get();

        return view('frontend.testimonials', compact('sections', 'candidateTestimonials', 'employerTestimonials'));
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
