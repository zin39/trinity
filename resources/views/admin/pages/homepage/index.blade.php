@extends('admin.layouts.master')
@section('title')Homepage Settings @stop
@section('breadcrum')Homepage Settings @stop

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
<script src="{{ asset('admin/js/repeater.js')}}"></script>
<script>
    angular.element(document).ready(function() {
        angular.bootstrap(document.getElementById("hire-now-app"), ['Repeater']);
    });
</script>
@stop 
@section('content')
<style>
    .nav-sidebar .nav-link {
        color: #333;
    }
    .nav-sidebar .nav-link.active {
        background-color: #00206045;
        color: #002060;
    }
    .nav-sidebar .nav-item:not(.nav-item-header):first-child {
        padding-top: 0;
    }
    .nav-sidebar .nav-item:not(.nav-item-header):last-child {
        padding-bottom: 0;
    }
</style>
@php
    $active = request('active', 'home-banner-area');
@endphp
<!-- Form inputs -->
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <div class="">
                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#home-banner-area" class="nav-link {{ $active == 'home-banner-area' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                                Banner Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-3-core-values" class="nav-link {{ $active == 'home-3-core-values' ? 'active' : '' }}" data-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                <i class="icon-list me-2"></i>
                                3 Core Values section
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-journey" class="nav-link {{ $active == 'home-journey' ? 'active' : '' }}" data-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                <i class="icon-calendar me-2"></i>
                                Start your Journey section
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-featured-sections" class="nav-link {{ $active == 'home-featured-sections' ? 'active' : '' }}" data-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                <i class="icon-youtube me-2"></i>
                                Featured Video sections
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-hire-now" class="nav-link {{ $active == 'home-hire-now' ? 'active' : '' }}" data-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                <i class="icon-users me-2"></i>
                                Hire now section
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'home-banner-area' ? 'active show' : '' }}" id="home-banner-area">
            @include('admin.pages.homepage.partials.banner-area')
        </div>
        <div class="tab-pane fade {{ $active == 'home-3-core-values' ? 'active show' : '' }}" id="home-3-core-values">
            @include('admin.pages.homepage.partials.3-core-values-section')
        </div>
        <div class="tab-pane fade {{ $active == 'home-journey' ? 'active show' : '' }}" id="home-journey">
            @include('admin.pages.homepage.partials.journey-section')
        </div>
        <div class="tab-pane fade {{ $active == 'home-featured-sections' ? 'active show' : '' }}" id="home-featured-sections">
            @include('admin.pages.homepage.partials.featured-sections')
        </div>
        <div class="tab-pane fade {{ $active == 'home-hire-now' ? 'active show' : '' }}" id="home-hire-now">
            @include('admin.pages.homepage.partials.hire-now-section')
        </div>
    </div>
</div>

@stop