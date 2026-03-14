@extends('admin.layouts.master')
@section('title')About Page Settings @stop
@section('breadcrum')About Page Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #00206045; color: #002060; }
</style>
@php $active = request('active', 'about-main'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#about-main" class="nav-link {{ $active == 'about-main' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Main Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-mission" class="nav-link {{ $active == 'about-mission' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Mission
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-vision" class="nav-link {{ $active == 'about-vision' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Vision
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about-values" class="nav-link {{ $active == 'about-values' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Values
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'about-main' ? 'active show' : '' }}" id="about-main">
            @include('admin.pages.about.partials.about-main')
        </div>
        <div class="tab-pane fade {{ $active == 'about-mission' ? 'active show' : '' }}" id="about-mission">
            @include('admin.pages.about.partials.about-mission')
        </div>
        <div class="tab-pane fade {{ $active == 'about-vision' ? 'active show' : '' }}" id="about-vision">
            @include('admin.pages.about.partials.about-vision')
        </div>
        <div class="tab-pane fade {{ $active == 'about-values' ? 'active show' : '' }}" id="about-values">
            @include('admin.pages.about.partials.about-values')
        </div>
    </div>
</div>
@stop
