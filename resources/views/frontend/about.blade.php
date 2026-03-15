@extends('frontend.layouts.main')

@section('content')

@php
    $main = optional(isset($sections['about-main']) ? json_decode($sections['about-main']) : null);
    $mission = optional(isset($sections['about-mission']) ? json_decode($sections['about-mission']) : null);
    $vision = optional(isset($sections['about-vision']) ? json_decode($sections['about-vision']) : null);
    $values = optional(isset($sections['about-values']) ? json_decode($sections['about-values']) : null);
@endphp

<!-- Page Hero -->
<div class="page-hero">
    @if($main->hero_image ?? null)
        <div class="page-hero-bg" style="background-image: url('/{{ $main->hero_image }}')"></div>
    @endif
    <div class="container">
        <h1>{{ $main->heading ?? 'About Us' }}</h1>
        <p class="breadcrumb-text">Home &mdash; About</p>
    </div>
</div>

<!-- About Body -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center fade-in-section">
            <div class="{{ ($main->about_image ?? null) ? 'col-lg-7' : 'col-lg-8' }}">
                <div class="gold-divider"></div>
                <div style="font-size: 1.05rem; line-height: 1.9; color: var(--color-coffee-brown);">
                    {!! nl2br(e($main->body ?? 'Karissa Subedi Career Consultancy Services was established with a vision to provide professional, supportive, and ethical career guidance for individuals seeking to build meaningful futures.')) !!}
                </div>
            </div>
            @if($main->about_image ?? null)
            <div class="col-lg-5 mt-4 mt-lg-0 fade-in-section">
                <img src="/{{ $main->about_image }}" alt="About Karissa Subedi Career Consultancy" class="about-side-image">
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section-padding-sm bg-beige">
    <div class="container">
        <div class="mission-vision-grid fade-in-section">
            <div class="mission-card">
                <h3>{{ $mission->heading ?? 'Our Mission' }}</h3>
                <p>{{ $mission->body ?? 'To provide clear, supportive, and professional career consultancy services that empower individuals to pursue meaningful education and employment pathways with confidence.' }}</p>
            </div>
            <div class="vision-card">
                <h3>{{ $vision->heading ?? 'Our Vision' }}</h3>
                <p>{{ $vision->body ?? 'To be a trusted and respected career consultancy service known for integrity, professionalism, and personalised guidance.' }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $values->heading ?? 'Our Values' }}</h2>
        </div>

        <div class="values-grid">
            @php
                $valueItems = [];
                for ($i = 1; $i <= 6; $i++) {
                    $key = 'value_' . $i;
                    $val = $values->{$key} ?? null;
                    if ($val) $valueItems[] = $val;
                }
                if (empty($valueItems)) {
                    $valueItems = ['Integrity', 'Professionalism', 'Clarity', 'Respect', 'Client-Centred Support', 'Excellence'];
                }
            @endphp
            @foreach($valueItems as $value)
            <div class="value-badge fade-in-section">
                <h6>{{ $value }}</h6>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="closing-cta-section section-padding-sm">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to learn more about how we can support your career journey.</p>
        <a href="{{ route('contact') }}" class="btn-gold">Contact Us</a>
    </div>
</section>

@endsection
