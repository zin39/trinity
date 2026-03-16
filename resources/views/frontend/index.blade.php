@extends('frontend.layouts.main')

@section('content')

@php
    $hero = optional(isset($sections['home-hero']) ? json_decode($sections['home-hero']) : null);
    $about = optional(isset($sections['home-about-short']) ? json_decode($sections['home-about-short']) : null);
@endphp

<!-- Split Hero Section -->
<section class="split-hero">
    <a href="{{ route('candidate') }}" class="split-hero-panel split-hero-candidate">
        @if($hero->candidate_image ?? null)
            <div class="split-hero-bg" style="background-image: url('/{{ $hero->candidate_image }}')"></div>
        @endif
        <div class="split-hero-overlay"></div>
        <div class="split-hero-content fade-in-section">
            <div class="hero-gold-bar"></div>
            <h2>{{ $hero->candidate_heading ?? 'Your Career Journey Starts Here' }}</h2>
            <span class="btn-outline-white">{{ $hero->candidate_cta ?? 'Explore Candidate Pathways' }}</span>
        </div>
    </a>
    <a href="{{ route('employer') }}" class="split-hero-panel split-hero-employer">
        @if($hero->employer_image ?? null)
            <div class="split-hero-bg" style="background-image: url('/{{ $hero->employer_image }}')"></div>
        @endif
        <div class="split-hero-overlay"></div>
        <div class="split-hero-content fade-in-section">
            <div class="hero-gold-bar"></div>
            <h2>{{ $hero->employer_heading ?? 'Build Your Global Workforce' }}</h2>
            <span class="btn-outline-white">{{ $hero->employer_cta ?? 'Explore Employer Solutions' }}</span>
        </div>
    </a>
</section>

<!-- About Short Section -->
<section class="intro-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-in-section">
                <div class="gold-divider"></div>
                <h2 class="section-title">{{ $about->heading ?? 'About Karissa Subedi Career Consultancy Services' }}</h2>
                <div class="intro-text">
                    {!! nl2br(e($about->body ?? 'Karissa Subedi Career Consultancy Services connects skilled international candidates with employers across healthcare, aged care, hospitality, and other industries.')) !!}
                </div>
                <div class="mt-4">
                    <a href="{{ $about->cta_link ?? '/about' }}" class="btn-outline-gold">{{ $about->cta_text ?? 'Learn More About Us' }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
