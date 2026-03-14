@php
    $setting = \App\Models\Setting::first();
    $currentPath = request()->path();
@endphp

<nav class="site-navbar">
    <div class="navbar-inner">
        <!-- Brand -->
        <a href="{{ route('home') }}" class="navbar-brand">
            <div class="brand-monogram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48" height="48" aria-hidden="true">
                    <rect width="48" height="48" rx="6" fill="#4A3428"/>
                    <text x="24" y="33" text-anchor="middle" font-family="'Playfair Display', 'Georgia', serif" font-size="24" font-weight="700" fill="#C8A46A" letter-spacing="-1">KS</text>
                </svg>
            </div>
            <div class="brand-text">
                <span class="brand-name">Karissa Subedi</span>
                <span class="brand-tagline">Career Consultancy Services</span>
            </div>
        </a>

        <!-- Desktop Nav -->
        <ul class="navbar-nav-links">
            <li><a href="{{ route('home') }}" class="{{ $currentPath === '/' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ $currentPath === 'about' ? 'active' : '' }}">About</a></li>
            <li><a href="{{ route('services') }}" class="{{ $currentPath === 'services' ? 'active' : '' }}">Services</a></li>
            <li><a href="{{ route('information-sessions') }}" class="{{ $currentPath === 'information-sessions' ? 'active' : '' }}">Information Sessions</a></li>
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
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('information-sessions') }}">Information Sessions</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <a href="{{ route('contact') }}" class="btn-gold">Book a Consultation</a>
    </div>
</nav>
