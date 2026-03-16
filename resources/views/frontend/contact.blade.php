@extends('frontend.layouts.main')

@section('content')

@php
    $main = optional(isset($sections['contact-main']) ? json_decode($sections['contact-main']) : null);
    $setting = \App\Models\Setting::first();
@endphp

<!-- Page Hero -->
<div class="page-hero">
    @if($main->hero_image ?? null)
        <div class="page-hero-bg" style="background-image: url('/{{ $main->hero_image }}')"></div>
    @endif
    <div class="container">
        <h1>{{ $main->heading ?? 'Contact Us' }}</h1>
        <p class="breadcrumb-text">Home &mdash; Contact</p>
    </div>
</div>

<!-- Contact Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center fade-in-section">
                <div class="gold-divider"></div>
                <p class="section-subtitle mx-auto">{{ $main->intro ?? 'Whether you are a candidate exploring career pathways or an employer seeking international talent, we would be pleased to hear from you.' }}</p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Contact Details -->
            <div class="col-lg-5 fade-in-section">
                <div class="contact-details-card">
                    <h3>Get In Touch</h3>
                    @php
                        $contactDetails = optional(isset($sections['contact-details']) ? json_decode($sections['contact-details']) : null);
                    @endphp
                    <p class="tagline">{{ $contactDetails->business_name ?? 'Karissa Subedi Career Consultancy Services' }}</p>

                    @if($setting && $setting->contact_no1)
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <span class="detail-label">Phone</span>
                            <a href="tel:{{ $setting->contact_no1 }}">{{ $setting->contact_no1 }}</a>
                        </div>
                    </div>
                    @endif

                    @if($setting && $setting->company_email)
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <span class="detail-label">Email</span>
                            <a href="mailto:{{ $setting->company_email }}">{{ $setting->company_email }}</a>
                        </div>
                    </div>
                    @endif

                    @if($setting && $setting->address1)
                    <div class="contact-detail-item">
                        <div class="detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <span class="detail-label">Location</span>
                            <span class="detail-value">{{ $setting->address1 }}@if($setting->address2), {{ $setting->address2 }}@endif</span>
                        </div>
                    </div>
                    @endif

                    <div class="contact-detail-item mt-2">
                        <div class="detail-icon"><i class="fas fa-briefcase"></i></div>
                        <div>
                            <span class="detail-label">Services</span>
                            <span class="detail-value">Career Consultancy &amp; International Recruitment</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7 fade-in-section">
                <div class="contact-form-card">
                    <h3>Send an Enquiry</h3>

                    @if(session('message'))
                        <div class="form-success">
                            <i class="fas fa-check-circle me-2" style="color: var(--color-deep-gold);"></i>
                            {{ session('message') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="form-success" style="border-color: #c0392b; background: rgba(192,57,43,0.08);">
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group-custom">
                            <label class="form-label-custom" for="first_name">Full Name <span style="color: var(--color-deep-gold);">*</span></label>
                            <input type="text" id="first_name" name="first_name" class="form-control-custom" placeholder="Your full name" value="{{ old('first_name') }}" required>
                        </div>
                        <div class="form-group-custom">
                            <label class="form-label-custom" for="email">Email Address <span style="color: var(--color-deep-gold);">*</span></label>
                            <input type="email" id="email" name="email" class="form-control-custom" placeholder="your@email.com" value="{{ old('email') }}" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label class="form-label-custom" for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-control-custom" placeholder="+61 4XX XXX XXX" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label class="form-label-custom" for="country">Country</label>
                                    <input type="text" id="country" name="country" class="form-control-custom" placeholder="Your country" value="{{ old('country') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label class="form-label-custom" for="organisation">Organisation <small class="text-muted">(optional)</small></label>
                                    <input type="text" id="organisation" name="organisation" class="form-control-custom" placeholder="Your organisation" value="{{ old('organisation') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label class="form-label-custom" for="enquiry_type">I Am A</label>
                                    <select id="enquiry_type" name="enquiry_type" class="form-control-custom">
                                        <option value="">Please select...</option>
                                        <option value="candidate" {{ old('enquiry_type') == 'candidate' ? 'selected' : '' }}>Candidate</option>
                                        <option value="employer" {{ old('enquiry_type') == 'employer' ? 'selected' : '' }}>Employer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-custom">
                            <label class="form-label-custom" for="comments">Message</label>
                            <textarea id="comments" name="comments" class="form-control-custom" placeholder="Tell us how we can help you...">{{ old('comments') }}</textarea>
                        </div>
                        <button type="submit" class="btn-gold w-100" style="width: 100%; text-align: center;">Send Enquiry</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
