@extends('frontend.layouts.main')

@section('content')

@php
    $main = optional(isset($sections['contact-main']) ? json_decode($sections['contact-main']) : null);
    $setting = \App\Models\Setting::first();
@endphp

<!-- Page Hero -->
<div class="page-hero">
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
                <p class="section-subtitle mx-auto">{{ $main->intro ?? 'We would be pleased to assist you with your career enquiries. Get in touch to learn more about our services and available pathways.' }}</p>
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
                            <span class="detail-value">Career Consultancy &amp; Pathway Guidance</span>
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
                        <div class="form-group-custom">
                            <label class="form-label-custom" for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control-custom" placeholder="+61 4XX XXX XXX" value="{{ old('phone', old('phone_number')) }}">
                        </div>
                        <div class="form-group-custom">
                            <label class="form-label-custom" for="area_of_enquiry">Area of Enquiry</label>
                            <select id="area_of_enquiry" name="area_of_enquiry" class="form-control-custom">
                                <option value="">Please select...</option>
                                <option value="Career Consultation" {{ old('area_of_enquiry') == 'Career Consultation' ? 'selected' : '' }}>Career Consultation</option>
                                <option value="Education Guidance" {{ old('area_of_enquiry') == 'Education Guidance' ? 'selected' : '' }}>Education Guidance</option>
                                <option value="Employer Introduction Pathway" {{ old('area_of_enquiry') == 'Employer Introduction Pathway' ? 'selected' : '' }}>Employer Introduction Pathway</option>
                                <option value="Graduate Career Support" {{ old('area_of_enquiry') == 'Graduate Career Support' ? 'selected' : '' }}>Graduate Career Support</option>
                                <option value="Healthcare Career Advisory" {{ old('area_of_enquiry') == 'Healthcare Career Advisory' ? 'selected' : '' }}>Healthcare Career Advisory</option>
                                <option value="Information Session" {{ old('area_of_enquiry') == 'Information Session' ? 'selected' : '' }}>Information Session</option>
                                <option value="Other" {{ old('area_of_enquiry') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
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
