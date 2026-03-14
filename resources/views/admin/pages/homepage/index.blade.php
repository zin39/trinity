@extends('admin.layouts.master')
@section('title')Homepage Settings @stop
@section('breadcrum')Homepage Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A342845; color: #4A3428; }
    .nav-sidebar .nav-item:not(.nav-item-header):first-child { padding-top: 0; }
    .nav-sidebar .nav-item:not(.nav-item-header):last-child { padding-bottom: 0; }
</style>
@php
    $active = request('active', 'home-hero');
@endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#home-hero" class="nav-link {{ $active == 'home-hero' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> Hero Section
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#home-intro" class="nav-link {{ $active == 'home-intro' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> Introduction
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#home-why-choose-us" class="nav-link {{ $active == 'home-why-choose-us' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> Why Choose Us
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#home-services-preview" class="nav-link {{ $active == 'home-services-preview' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> Services Preview
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#home-closing-cta" class="nav-link {{ $active == 'home-closing-cta' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> Closing CTA
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'home-hero' ? 'active show' : '' }}" id="home-hero">
            @include('admin.pages.homepage.partials.home-hero')
        </div>
        <div class="tab-pane fade {{ $active == 'home-intro' ? 'active show' : '' }}" id="home-intro">
            @include('admin.pages.homepage.partials.home-intro')
        </div>
        <div class="tab-pane fade {{ $active == 'home-why-choose-us' ? 'active show' : '' }}" id="home-why-choose-us">
            @include('admin.pages.homepage.partials.home-why-choose-us')
        </div>
        <div class="tab-pane fade {{ $active == 'home-services-preview' ? 'active show' : '' }}" id="home-services-preview">
            @include('admin.pages.homepage.partials.home-services-preview')
        </div>
        <div class="tab-pane fade {{ $active == 'home-closing-cta' ? 'active show' : '' }}" id="home-closing-cta">
            @include('admin.pages.homepage.partials.home-closing-cta')
        </div>
    </div>
</div>
@stop
