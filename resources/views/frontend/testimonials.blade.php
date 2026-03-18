@extends('frontend.layouts.main')

@section('content')

@php
    $hero = optional(isset($sections['testimonials-hero']) ? json_decode($sections['testimonials-hero']) : null);
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>{{ $hero->heading ?? 'What Our Clients Say' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Testimonials</p>
    </div>
</div>

<!-- Candidate Testimonials -->
@if($candidateTestimonials->count() > 0)
<section class="section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">Candidate Testimonials</h2>
        </div>

        <div class="testimonials-grid">
            @foreach($candidateTestimonials as $testimonial)
            <div class="testimonial-card fade-in-section">
                <div class="testimonial-photo">
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}">
                    @else
                        <div class="testimonial-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    @endif
                </div>
                <div class="testimonial-body">
                    <p class="testimonial-quote">&ldquo;{{ strip_tags($testimonial->message) }}&rdquo;</p>
                    <h6 class="testimonial-name">{{ $testimonial->name }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Employer Testimonials -->
@if($employerTestimonials->count() > 0)
<section class="section-padding bg-beige">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">Employer Testimonials</h2>
        </div>

        <div class="testimonials-grid">
            @foreach($employerTestimonials as $testimonial)
            <div class="testimonial-card fade-in-section">
                <div class="testimonial-photo">
                    @if($testimonial->image)
                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}">
                    @else
                        <div class="testimonial-placeholder">
                            <i class="fas fa-building"></i>
                        </div>
                    @endif
                </div>
                <div class="testimonial-body">
                    <p class="testimonial-quote">&ldquo;{{ strip_tags($testimonial->message) }}&rdquo;</p>
                    <h6 class="testimonial-name">{{ $testimonial->name }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($candidateTestimonials->count() === 0 && $employerTestimonials->count() === 0)
<section class="section-padding">
    <div class="container text-center">
        <p class="section-subtitle mx-auto">Testimonials are coming soon. Check back for stories from our candidates and employer partners.</p>
    </div>
</section>
@endif

<!-- CTA -->
<section class="closing-cta-section section-padding-sm">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2>Start Your Journey With Us</h2>
        <p>Whether you are a candidate or an employer, we are here to help.</p>
        <a href="{{ route('contact') }}" class="btn-gold">Contact Us</a>
    </div>
</section>

@endsection
