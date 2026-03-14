@extends('frontend.layouts.main')

@section('content')

@php
    $main = optional(isset($sections['services-main']) ? json_decode($sections['services-main']) : null);
    $items = optional(isset($sections['services-items']) ? json_decode($sections['services-items']) : null);
    $cta = optional(isset($sections['services-cta']) ? json_decode($sections['services-cta']) : null);
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>{{ $main->heading ?? 'Our Services' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Services</p>
    </div>
</div>

<!-- Services Intro -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center fade-in-section">
                <div class="gold-divider"></div>
                <p class="section-subtitle mx-auto" style="font-size: 1.05rem;">{{ $main->intro ?? 'We provide professional consultancy services for individuals looking for guidance in career planning, education options, and pathway opportunities, particularly in healthcare and related sectors.' }}</p>
            </div>
        </div>

        <div class="services-full-grid">
            @php
                $serviceList = [];
                for ($i = 1; $i <= 5; $i++) {
                    $titleKey = 'service_' . $i . '_title';
                    $descKey = 'service_' . $i . '_desc';
                    $title = $items->{$titleKey} ?? null;
                    $desc = $items->{$descKey} ?? null;
                    if ($title) $serviceList[] = ['title' => $title, 'desc' => $desc];
                }
                if (empty($serviceList)) {
                    $serviceList = [
                        ['title' => 'Career Consultation', 'desc' => 'One-on-one consultation to help clients understand their goals, strengths, and possible career pathways.'],
                        ['title' => 'Education and Pathway Guidance', 'desc' => 'Support in exploring relevant study options, training pathways, and development opportunities aligned with career goals.'],
                        ['title' => 'Employer Introduction Pathway Information', 'desc' => 'Guidance for individuals interested in learning about employer introduction pathways and professional opportunities, with a clear and ethical approach to information sharing.'],
                        ['title' => 'Graduate Career Support', 'desc' => 'Advisory support for fresh graduates seeking direction, confidence, and clarity in navigating early career opportunities.'],
                        ['title' => 'Healthcare Career Advisory', 'desc' => 'Specialised support for individuals interested in healthcare-related pathways, including education and career direction.'],
                    ];
                }
            @endphp
            @foreach($serviceList as $service)
            <div class="service-full-card fade-in-section">
                <h4>{{ $service['title'] }}</h4>
                <p>{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services CTA -->
<section class="services-cta-section section-padding-sm">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2 class="section-title">{{ $cta->heading ?? 'Ready to Learn More?' }}</h2>
        <p class="section-subtitle mx-auto mb-4">{{ $cta->body ?? 'Enquire about our services today.' }}</p>
        <a href="{{ $cta->button_link ?? '/contact' }}" class="btn-gold">{{ $cta->button_text ?? 'Enquire Now' }}</a>
    </div>
</section>

@endsection
