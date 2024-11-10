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
                            <a href="#home-nurses-testimonials-area" class="nav-link {{ $active == 'home-nurses-testimonials-area' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Testimonials Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-registered-nurse-take-step" class="nav-link {{ $active == 'home-registered-nurse-take-step' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Take a step Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-membership-previllage" class="nav-link {{ $active == 'home-membership-previllage' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              Membership Previllage Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-latest-news" class="nav-link {{ $active == 'home-latest-news' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                            Latest News area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#home-how-to-get-started" class="nav-link {{ $active == 'home-how-to-get-started' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              How to get Started Area
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

        <div class="tab-pane fade {{ $active == 'home-nurses-testimonials-area' ? 'active show' : '' }}" id="home-nurses-testimonials-area">
            @include('admin.pages.homepage.partials.home-nurses-testimonials-area')
        </div>

        <div class="tab-pane fade {{ $active == 'home-registered-nurse-take-step' ? 'active show' : '' }}" id="home-registered-nurse-take-step">
            @include('admin.pages.homepage.partials.home-registered-nurse-take-step')
        </div>

        <div class="tab-pane fade {{ $active == 'home-membership-previllage' ? 'active show' : '' }}" id="home-membership-previllage">
            @include('admin.pages.homepage.partials.home-membership-previllage')
        </div>

        <div class="tab-pane fade {{ $active == 'home-latest-news' ? 'active show' : '' }}" id="home-latest-news">
            @include('admin.pages.homepage.partials.home-latest-news')
        </div>

        <div class="tab-pane fade {{ $active == 'home-how-to-get-started' ? 'active show' : '' }}" id="home-how-to-get-started">
            @include('admin.pages.homepage.partials.home-how-to-get-started')
        </div>

                       
                       


      
    </div>
</div>

@stop


