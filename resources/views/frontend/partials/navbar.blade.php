@php
    $setting = \App\Models\Setting::first();
    $currentPath = request()->path();
@endphp

<nav class="site-navbar">
    <div class="navbar-inner">
        <!-- Brand -->
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset($setting->company_logo ?? 'frontend-assets/img/thiswebsite_logo.png') }}" alt="Karissa Subedi Career Consultancy Services" class="navbar-logo">
        </a>

        <!-- Desktop Nav -->
        <ul class="navbar-nav-links">
            <li><a href="{{ route('home') }}" class="{{ $currentPath === '/' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ $currentPath === 'about' ? 'active' : '' }}">About Us</a></li>
            <li><a href="{{ route('candidate') }}" class="{{ $currentPath === 'candidate' ? 'active' : '' }}">Candidate</a></li>
            <li><a href="{{ route('employer') }}" class="{{ $currentPath === 'employer' ? 'active' : '' }}">Employer</a></li>
            <li><a href="{{ route('testimonials') }}" class="{{ $currentPath === 'testimonials' ? 'active' : '' }}">Testimonials</a></li>
            <li><a href="{{ route('contact') }}" class="{{ $currentPath === 'contact' ? 'active' : '' }}">Contact</a></li>
        </ul>

        <!-- CTA + Hamburger -->
        <div class="navbar-cta">
            <a href="{{ route('contact') }}" class="btn-gold d-none d-lg-inline-block">Book a Consultation</a>
            <button class="navbar-toggle-btn ms-3" type="button" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-nav">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('candidate') }}">Candidate</a></li>
            <li><a href="{{ route('employer') }}">Employer</a></li>
            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-gold">Book a Consultation</a>
    </div>
</nav>
