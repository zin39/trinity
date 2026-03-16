@php
    $setting = \App\Models\Setting::first();
@endphp

<footer class="site-footer">
    <!-- Centered Logo Section -->
    <div class="container">
        <div class="footer-brand">
            <div class="footer-logo-mark">
                <img src="{{ asset($setting->company_logo ?? 'frontend-assets/img/logo.jpeg') }}" alt="Karissa Subedi Career Consultancy Services">
            </div>
            <p class="footer-tagline">Opening Career Opportunities Worldwide</p>
        </div>
    </div>

    <!-- Footer Columns -->
    <div class="container">
        <div class="row">
            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 mb-4">
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

            <!-- Follow Us -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h6 class="footer-heading">Follow Us On</h6>
                <div class="footer-social-links">
                    @if($setting && $setting->facebook_link)
                    <a href="{{ $setting->facebook_link }}" target="_blank" rel="noopener" class="footer-social-item">
                        <i class="fab fa-facebook-f"></i> <span>Facebook</span>
                    </a>
                    @endif
                    @if($setting && $setting->instagram_link)
                    <a href="{{ $setting->instagram_link }}" target="_blank" rel="noopener" class="footer-social-item">
                        <i class="fab fa-instagram"></i> <span>Instagram</span>
                    </a>
                    @endif
                    @if($setting && $setting->linkin_link)
                    <a href="{{ $setting->linkin_link }}" target="_blank" rel="noopener" class="footer-social-item">
                        <i class="fab fa-linkedin-in"></i> <span>LinkedIn</span>
                    </a>
                    @endif
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-12 mb-4">
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
