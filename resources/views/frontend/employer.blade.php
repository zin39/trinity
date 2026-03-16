@extends('frontend.layouts.main')

@section('content')

@php
    $hero = optional(isset($sections['employer-hero']) ? json_decode($sections['employer-hero']) : null);
    $partnerships = optional(isset($sections['employer-partnerships']) ? json_decode($sections['employer-partnerships']) : null);
    $values = optional(isset($sections['employer-values']) ? json_decode($sections['employer-values']) : null);
    $preparation = optional(isset($sections['employer-preparation']) ? json_decode($sections['employer-preparation']) : null);
    $workforce = optional(isset($sections['employer-workforce']) ? json_decode($sections['employer-workforce']) : null);
    $cta = optional(isset($sections['employer-cta']) ? json_decode($sections['employer-cta']) : null);

    $valueIcons = ['fas fa-user-check', 'fas fa-balance-scale', 'fas fa-industry', 'fas fa-project-diagram', 'fas fa-chart-line'];
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>{{ $hero->heading ?? 'Partner With Us for Ethical International Recruitment' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Employer</p>
        @if($hero->subheading ?? null)
            <p class="page-hero-subtitle">{{ $hero->subheading }}</p>
        @endif
        <div class="mt-4">
            <a href="{{ $hero->cta_link ?? '/contact' }}" class="btn-gold">{{ $hero->cta_text ?? 'Discuss Your Workforce Needs' }}</a>
        </div>
    </div>
</div>

<!-- Partnerships Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-in-section">
                <div class="gold-divider"></div>
                <h2 class="section-title">{{ $partnerships->heading ?? 'Tailored Workforce Partnerships' }}</h2>
                <div style="font-size: 1.05rem; line-height: 1.9; color: var(--color-coffee-brown);">
                    {!! nl2br(e($partnerships->body ?? '')) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employer Values Section -->
<section class="section-padding bg-beige">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $values->heading ?? 'Why Employers Choose Us' }}</h2>
        </div>

        <div class="why-grid">
            @for($i = 1; $i <= 5; $i++)
                @php
                    $title = $values->{'value_'.$i.'_title'} ?? null;
                    $desc = $values->{'value_'.$i.'_desc'} ?? null;
                @endphp
                @if($title)
                <div class="why-card fade-in-section">
                    <div class="why-icon">
                        <i class="{{ $valueIcons[$i - 1] ?? 'fas fa-check' }}"></i>
                    </div>
                    <h5>{{ $title }}</h5>
                    @if($desc)<p style="font-size: 0.88rem; line-height: 1.75; margin-top: 0.5rem; margin-bottom: 0; font-weight: 300;">{{ $desc }}</p>@endif
                </div>
                @endif
            @endfor
        </div>
    </div>
</section>

<!-- Candidate Preparation Framework (Timeline) -->
<section class="section-padding">
    <div class="container">
        <div class="text-center fade-in-section">
            <div class="gold-divider"></div>
            <h2 class="section-title">{{ $preparation->heading ?? 'Our Candidate Preparation Framework' }}</h2>
        </div>

        <div class="timeline-section">
            @for($i = 1; $i <= 7; $i++)
                @php
                    $title = $preparation->{'step_'.$i.'_title'} ?? null;
                    $desc = $preparation->{'step_'.$i.'_desc'} ?? null;
                @endphp
                @if($title)
                <div class="timeline-step fade-in-section">
                    <div class="timeline-badge">{{ $i }}</div>
                    <div class="timeline-content">
                        <h5>{{ $title }}</h5>
                        @if($desc)<p>{{ $desc }}</p>@endif
                    </div>
                </div>
                @endif
            @endfor
        </div>
    </div>
</section>

<!-- Workforce Partnership Approach -->
<section class="section-padding-sm bg-beige">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 fade-in-section">
                <div class="gold-divider"></div>
                <h2 class="section-title">{{ $workforce->heading ?? 'Workforce Partnership Approach' }}</h2>
                <div style="font-size: 1.05rem; line-height: 1.9; color: var(--color-coffee-brown);">
                    {!! nl2br(e($workforce->body ?? '')) !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Large CTA Section -->
<section class="closing-cta-section section-padding">
    <div class="container text-center fade-in-section">
        <div class="gold-divider"></div>
        <h2>{{ $cta->heading ?? 'Ready to Build Your Workforce?' }}</h2>
        <p>Partner with us for ethical, transparent, and professional international recruitment.</p>
        <a href="{{ $cta->cta_link ?? '/contact' }}" class="btn-gold">{{ $cta->cta_text ?? 'Get In Touch' }}</a>
    </div>
</section>

@endsection
