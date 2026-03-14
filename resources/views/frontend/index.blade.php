@extends('frontend.layouts.main')

@section('content')

@php
    $hero = optional(isset($sections['home-hero']) ? json_decode($sections['home-hero']) : null);
    $intro = optional(isset($sections['home-intro']) ? json_decode($sections['home-intro']) : null);
    $why = optional(isset($sections['home-why-choose-us']) ? json_decode($sections['home-why-choose-us']) : null);
    $servPrev = optional(isset($sections['home-services-preview']) ? json_decode($sections['home-services-preview']) : null);
    $cta = optional(isset($sections['home-closing-cta']) ? json_decode($sections['home-closing-cta']) : null);

    $whyIcons = ['fas fa-user-circle', 'fas fa-balance-scale', 'fas fa-road', 'fas fa-hands-helping', 'fas fa-heartbeat', 'fas fa-star'];
@endphp

<!-- Hero Section -->
<section class="hero-section">
    @if($hero->background_image ?? null)
        <div class="hero-bg-image" style="background-image: url('/{{ $hero->background_image }}')"></div>
    @endif
    <div class="container">
        <div class="hero-content fade-in-section">
            <div class="hero-gold-bar"></div>
            <h1>{{ $hero->heading ?? 'Guiding You Towards Meaningful Career Pathways' }}</h1>
            <p class="hero-subtitle">{{ $hero->subheading ?? 'Karissa Subedi Career Consultancy Services provides professional career guidance, education support, and pathway information for individuals seeking opportunities in healthcare and related industries.' }}</p>
            <div class="hero-actions">
                <a href="{{ $hero->cta1_link ?? '/contact' }}" class="btn-gold">{{ $hero->cta1_text ?? 'Book a Consultation' }}</a>
                <a href="{{ $hero->cta2_link ?? '/contact' }}" class="btn-outline-white">{{ $hero->cta2_text ?? 'Enquire Now' }}</a>
            </div>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="intro-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-in-section">
                <div class="gold-divider"></div>
                <h2 class="section-title">{{ $intro->heading ?? 'Professional Guidance with a Personal Approach' }}</h2>
                <div class="intro-text">
                    {!! nl2br(e($intro->body ?? 'At Karissa Subedi Career Consultancy Services, we are committed to helping individuals explore clear and informed career pathways with confidence.')) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $why->heading ?? 'Why Choose Karissa Subedi Career Consultancy Services?' }}</h2>
        </div>

        <div class="why-grid">
            @php
                $points = [];
                for ($i = 1; $i <= 6; $i++) {
                    $key = 'point_' . $i;
                    $val = $why->{$key} ?? null;
                    if ($val) $points[] = $val;
                }
                if (empty($points)) {
                    $points = [
                        'Personalised career guidance',
                        'Professional and ethical approach',
                        'Clear pathway information',
                        'Supportive and approachable service',
                        'Strong focus on healthcare and career development',
                        'Premium, client-focused experience',
                    ];
                }
            @endphp
            @foreach($points as $i => $point)
            <div class="why-card fade-in-section">
                <div class="why-icon">
                    <i class="{{ $whyIcons[$i] ?? 'fas fa-check' }}"></i>
                </div>
                <h5>{{ $point }}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-preview-section section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $servPrev->heading ?? 'Our Services' }}</h2>
            <p class="section-subtitle mx-auto">{{ $servPrev->intro ?? 'We offer professional support for individuals seeking guidance on education, training, and career opportunities.' }}</p>
        </div>

        <div class="services-grid">
            @php
                $services = [];
                for ($i = 1; $i <= 5; $i++) {
                    $key = 'service_' . $i;
                    $val = $servPrev->{$key} ?? null;
                    if ($val) $services[] = $val;
                }
                if (empty($services)) {
                    $services = [
                        'Career Consultation',
                        'Education and Pathway Guidance',
                        'Employer Introduction Pathway Information',
                        'Graduate Career Support',
                        'Healthcare Career Advisory',
                    ];
                }
            @endphp
            @foreach($services as $i => $service)
            <div class="service-card fade-in-section">
                <div class="service-number">0{{ $i + 1 }}</div>
                <h5>{{ $service }}</h5>
                @php $descKey = 'service_' . ($i + 1) . '_desc'; @endphp
                @if($servPrev->{$descKey} ?? null)
                    <p>{{ $servPrev->{$descKey} }}</p>
                @endif
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5 fade-in-section">
            <a href="{{ route('services') }}" class="btn-outline-gold">View All Services</a>
        </div>
    </div>
</section>

<!-- Closing CTA Section -->
<section class="closing-cta-section section-padding">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2>{{ $cta->heading ?? 'Take the Next Step with Confidence' }}</h2>
        <p>{{ $cta->body ?? 'Whether you are a fresh graduate, an aspiring healthcare worker, or someone exploring a new direction, we are here to help you understand your options and move forward with confidence.' }}</p>
        <a href="{{ $cta->button_link ?? '/contact' }}" class="btn-gold">{{ $cta->button_text ?? 'Contact Us Today' }}</a>
    </div>
</section>

@endsection
