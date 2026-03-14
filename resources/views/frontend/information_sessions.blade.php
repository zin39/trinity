@extends('frontend.layouts.main')

@section('content')

@php
    $main = optional(isset($sections['info-sessions-main']) ? json_decode($sections['info-sessions-main']) : null);
    $graduates = optional(isset($sections['info-sessions-graduates']) ? json_decode($sections['info-sessions-graduates']) : null);
    $nursing = optional(isset($sections['info-sessions-nursing']) ? json_decode($sections['info-sessions-nursing']) : null);
    $cta = optional(isset($sections['info-sessions-cta']) ? json_decode($sections['info-sessions-cta']) : null);
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>{{ $main->heading ?? 'Information Sessions' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Information Sessions</p>
    </div>
</div>

<!-- Intro -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-in-section">
                <div class="gold-divider"></div>
                <p class="section-subtitle mx-auto" style="font-size: 1.05rem;">{{ $main->intro ?? 'We offer information sessions for individuals who want to better understand available career pathways, education options, and professional opportunities.' }}</p>
            </div>
        </div>

        <div class="sessions-grid">
            <div class="session-card fade-in-section">
                <h3>{{ $graduates->heading ?? 'For Fresh Graduates in Health-Related Courses' }}</h3>
                <p>{{ $graduates->body ?? 'This session is designed for fresh graduates from health-related backgrounds who are exploring career pathways, further development opportunities, and employer introduction options relevant to their qualifications.' }}</p>
            </div>
            <div class="session-card fade-in-section">
                <h3>{{ $nursing->heading ?? 'For Bachelor of Nursing Graduates' }}</h3>
                <p>{{ $nursing->body ?? 'This session is designed for graduates of Bachelor of Nursing who are interested in understanding professional opportunities, career planning, and employer introduction pathways relevant to registered nursing employment.' }}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="closing-cta-section section-padding-sm">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2>{{ $cta->heading ?? 'Interested in Attending?' }}</h2>
        <p>{{ $cta->body ?? 'Register your interest and we will be in touch with upcoming session details.' }}</p>
        <a href="{{ $cta->button_link ?? route('contact') }}" class="btn-gold">{{ $cta->button_text ?? 'Register Your Interest' }}</a>
    </div>
</section>

@endsection
