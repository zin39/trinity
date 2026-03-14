@extends('frontend.layouts.main')

@section('content')

@php
    $content = optional(isset($sections['privacy-policy-main-content']) ? json_decode($sections['privacy-policy-main-content']) : null);
@endphp

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Privacy Policy</h1>
        <p class="breadcrumb-text">Home &mdash; Privacy Policy</p>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="privacy-content fade-in-section">
            <div class="gold-divider gold-divider-left"></div>
            @if($content && $content->description)
                {!! $content->description !!}
            @else
                <h4>Privacy Policy</h4>
                <p>Karissa Subedi Career Consultancy Services is committed to protecting your privacy. This policy outlines how we collect, use, and safeguard your personal information.</p>
                <h5>Information We Collect</h5>
                <p>We collect personal information that you voluntarily provide when you contact us or submit an enquiry.</p>
                <h5>How We Use Your Information</h5>
                <p>We use your information to process enquiries, communicate with you about our services, and improve our offerings.</p>
                <h5>Data Security</h5>
                <p>We implement appropriate security measures to protect your personal information against unauthorised access or disclosure.</p>
                <h5>Contact Us</h5>
                <p>If you have questions about our privacy policy, please contact us via our <a href="{{ route('contact') }}">contact page</a>.</p>
            @endif
        </div>
    </div>
</section>

@endsection
