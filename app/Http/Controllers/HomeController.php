<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageSection;
use App\Models\Award;
use App\Models\Testimonial;
use App\Models\Team;
use App\Models\Blog;
use Rinvex\Country\Country;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sections = PageSection::whereIn('slug', ['home-banner-area', 'home-nurses-testimonials-area', 'home-registered-nurse-take-step', 'home-membership-previllage', 'home-latest-news', 'home-how-to-get-started'])->pluck('content', 'slug');
        $awards = Award::where('status',1)->get();
        $testimonials = Testimonial::where('status',1)->get();
        $teams = Team::where('status',1)->get();
        $blogs = Blog::where('status',1)->get();
        return view('frontend.index',compact('sections','awards','testimonials','teams','blogs'));
    }

    public function registeredNurse()
    {
        $sections = PageSection::whereIn('slug', ['registered-nurse-banner', 'registered-nurse-main-content', 'registered-nurse-how-to-qualify', 'registered-nurse-membership-previllage', 'registered-nurse-how-to-get-started'])->pluck('content', 'slug');
        return view('frontend.registered_nurse',compact('sections'));
    }

    public function applyNow()
    {
        $sections = PageSection::whereIn('slug', ['apply-now-banner'])->pluck('content', 'slug');
        $countries = countries();
        return view('frontend.apply_now', compact('sections','countries'));
    }

    public function privacyPolicy()
    {
        $sections = PageSection::whereIn('slug', ['privacy-policy-banner', 'privacy-policy-main-content','privacy-policy-apply-section'])->pluck('content', 'slug');
        return view('frontend.privacy_policy', compact('sections'));
    }

    public function healthcareOrganizations()
    {
        $sections = PageSection::whereIn('slug', ['healthcare-organizations-banner', 'healthcare-organizations-main-content','healthcare-organizations-membership-previllage', 'healthcare-organizations-how-to-get-started'])->pluck('content', 'slug');
        return view('frontend.healthcare_organizations',compact('sections'));
    }

    public function whyChooseUs()
    {
        $sections = PageSection::whereIn('slug', ['why-choose-us-banner', 'why-choose-us-main-content','why-choose-us-membership-previllage', 'why-choose-us-apply-section'])->pluck('content', 'slug');
        return view('frontend.why_choose_us',compact('sections'));
    }
}
