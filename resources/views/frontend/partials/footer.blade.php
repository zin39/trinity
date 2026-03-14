@php
    $setting = \App\Models\Setting::first();
@endphp

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <!-- Brand Column -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="footer-brand">
                    <div class="footer-logo-mark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="44" height="44" aria-hidden="true">
                            <rect width="48" height="48" rx="6" fill="#C8A46A"/>
                            <text x="24" y="33" text-anchor="middle" font-family="'Playfair Display', 'Georgia', serif" font-size="24" font-weight="700" fill="#FFFFFF" letter-spacing="-1">KS</text>
                        </svg>
                    </div>
                    <p class="footer-company-name">Karissa Subedi Career Consultancy Services</p>
                    <p class="footer-tagline">Professional Career Guidance and Pathway Support</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h6 class="footer-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('information-sessions') }}">Information Sessions</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5 col-md-12 mb-4">
                <h6 class="footer-heading">Get In Touch</h6>

                @if($setting && $setting->contact_no1)
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:{{ $setting->contact_no1 }}">{{ $setting->contact_no1 }}</a>
                </div>
                @endif

                @if($setting && $setting->company_email)
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ $setting->company_email }}">{{ $setting->company_email }}</a>
                </div>
                @endif

                @if($setting && $setting->address1)
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ $setting->address1 }}@if($setting->address2), {{ $setting->address2 }}@endif</span>
                </div>
                @endif

                @if($setting && ($setting->facebook_link || $setting->instagram_link || $setting->linkin_link))
                <div class="mt-3 d-flex gap-3">
                    @if($setting->facebook_link)
                    <a href="{{ $setting->facebook_link }}" style="color: rgba(255,255,255,0.5); font-size: 1.1rem;" target="_blank" rel="noopener">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    @endif
                    @if($setting->instagram_link)
                    <a href="{{ $setting->instagram_link }}" style="color: rgba(255,255,255,0.5); font-size: 1.1rem;" target="_blank" rel="noopener">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                    @if($setting->linkin_link)
                    <a href="{{ $setting->linkin_link }}" style="color: rgba(255,255,255,0.5); font-size: 1.1rem;" target="_blank" rel="noopener">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="footer-gold-divider"></div>
    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">
                &copy; {{ date('Y') }} Karissa Subedi Career Consultancy Services. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('frontend-assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend-assets/custom_js/main.js?v=2.0') }}"></script>
@yield('js')
