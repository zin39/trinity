@extends('admin.layouts.master')
@section('title')Employer Page Settings @stop
@section('breadcrum')Employer Page Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A2E1F45; color: #4A2E1F; }
</style>
@php $active = request('active', 'employer-hero'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#employer-hero" class="nav-link {{ $active == 'employer-hero' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Hero
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#employer-partnerships" class="nav-link {{ $active == 'employer-partnerships' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Partnerships
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#employer-values" class="nav-link {{ $active == 'employer-values' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Values
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#employer-preparation" class="nav-link {{ $active == 'employer-preparation' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Preparation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#employer-workforce" class="nav-link {{ $active == 'employer-workforce' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Workforce
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#employer-cta" class="nav-link {{ $active == 'employer-cta' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> CTA
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'employer-hero' ? 'active show' : '' }}" id="employer-hero">
            @include('admin.pages.employer.partials.employer-hero')
        </div>
        <div class="tab-pane fade {{ $active == 'employer-partnerships' ? 'active show' : '' }}" id="employer-partnerships">
            @include('admin.pages.employer.partials.employer-partnerships')
        </div>
        <div class="tab-pane fade {{ $active == 'employer-values' ? 'active show' : '' }}" id="employer-values">
            @include('admin.pages.employer.partials.employer-values')
        </div>
        <div class="tab-pane fade {{ $active == 'employer-preparation' ? 'active show' : '' }}" id="employer-preparation">
            @include('admin.pages.employer.partials.employer-preparation')
        </div>
        <div class="tab-pane fade {{ $active == 'employer-workforce' ? 'active show' : '' }}" id="employer-workforce">
            @include('admin.pages.employer.partials.employer-workforce')
        </div>
        <div class="tab-pane fade {{ $active == 'employer-cta' ? 'active show' : '' }}" id="employer-cta">
            @include('admin.pages.employer.partials.employer-cta')
        </div>
    </div>
</div>
@stop
