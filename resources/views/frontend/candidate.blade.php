@extends('frontend.layouts.main')

@section('content')

@php
    $hero = optional(isset($sections['candidate-hero']) ? json_decode($sections['candidate-hero']) : null);
    $pathways = optional(isset($sections['candidate-pathways']) ? json_decode($sections['candidate-pathways']) : null);
    $values = optional(isset($sections['candidate-values']) ? json_decode($sections['candidate-values']) : null);
    $services = optional(isset($sections['candidate-services']) ? json_decode($sections['candidate-services']) : null);

    $pathwayIcons = ['fas fa-user-nurse', 'fas fa-hand-holding-heart', 'fas fa-concierge-bell', 'fas fa-heartbeat', 'fas fa-briefcase'];
    $valueIcons = ['fas fa-user-circle', 'fas fa-clipboard-check', 'fas fa-handshake', 'fas fa-chalkboard-teacher', 'fas fa-headset'];
    $industries = [
        ['name' => 'Health', 'icon' => 'fas fa-heartbeat'],
        ['name' => 'Aged Care', 'icon' => 'fas fa-hand-holding-heart'],
        ['name' => 'Hospitality', 'icon' => 'fas fa-concierge-bell'],
        ['name' => 'Others', 'icon' => 'fas fa-th-large'],
    ];
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>{{ $hero->heading ?? 'Your Career Pathway to Australia' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Candidate</p>
    </div>
</div>

<!-- Intro -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-in-section">
                <div class="gold-divider"></div>
                <div class="intro-text">
                    {!! nl2br(e($hero->body ?? 'Whether you are a qualified nurse, aged care worker, hospitality professional, or skilled worker in another field, we provide clear, ethical guidance to help you achieve your career goals in Australia.')) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pathways Section -->
<section class="section-padding bg-beige">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $pathways->heading ?? 'Career Pathways We Support' }}</h2>
        </div>

        <div class="why-grid">
            @for($i = 1; $i <= 5; $i++)
                @php
                    $title = $pathways->{'pathway_'.$i.'_title'} ?? null;
                    $desc = $pathways->{'pathway_'.$i.'_desc'} ?? null;
                @endphp
                @if($title)
                <div class="why-card fade-in-section">
                    <div class="why-icon">
                        <i class="{{ $pathwayIcons[$i - 1] ?? 'fas fa-check' }}"></i>
                    </div>
                    <h5>{{ $title }}</h5>
                    @if($desc)<p style="font-size: 0.88rem; line-height: 1.75; margin-top: 0.5rem; margin-bottom: 0; font-weight: 300;">{{ $desc }}</p>@endif
                </div>
                @endif
            @endfor
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $values->heading ?? 'What We Offer Candidates' }}</h2>
        </div>

        <div class="services-grid">
            @for($i = 1; $i <= 5; $i++)
                @php
                    $title = $values->{'value_'.$i.'_title'} ?? null;
                    $desc = $values->{'value_'.$i.'_desc'} ?? null;
                @endphp
                @if($title)
                <div class="service-card fade-in-section">
                    <div class="service-number">0{{ $i }}</div>
                    <h5>{{ $title }}</h5>
                    @if($desc)<p>{{ $desc }}</p>@endif
                </div>
                @endif
            @endfor
        </div>
    </div>
</section>

<!-- Industries Section -->
<section class="section-padding-sm bg-beige">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $services->heading ?? 'Industries We Serve' }}</h2>
            <p class="section-subtitle mx-auto">{{ $services->body ?? 'We connect candidates with employers across Australia\'s key growth industries.' }}</p>
        </div>

        <div class="industry-cards">
            @foreach($industries as $industry)
            <div class="industry-card fade-in-section">
                <i class="{{ $industry['icon'] }}"></i>
                <h5>{{ $industry['name'] }}</h5>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5 fade-in-section">
            <a href="{{ $services->cta_link ?? '/contact' }}" class="btn-gold">{{ $services->cta_text ?? 'Register Your Interest' }}</a>
        </div>
    </div>
</section>

@endsection
