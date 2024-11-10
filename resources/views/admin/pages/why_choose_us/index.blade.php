

@extends('admin.layouts.master')
@section('title')Why Choose Us Settings @stop
@section('breadcrum')Why Choose Us Settings @stop

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
    $active = request('active', 'why-choose-us-banner');
@endphp
<!-- Form inputs -->
<div class="d-flex"  ng-app="Repeater">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <div class="">
                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#why-choose-us-banner" class="nav-link {{ $active == 'why-choose-us-banner' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                                Banner Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#why-choose-us-main-content" class="nav-link {{ $active == 'why-choose-us-main-content' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Main Content
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#why-choose-us-membership-previllage" class="nav-link {{ $active == 'why-choose-us-membership-previllage' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              Membership Previllage Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#why-choose-us-apply-section" class="nav-link {{ $active == 'why-choose-us-apply-section' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
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
        <div class="tab-pane fade {{ $active == 'why-choose-us-banner' ? 'active show' : '' }}" id="why-choose-us-banner">
            @include('admin.pages.why_choose_us.partials.why-choose-us-banner')
        </div>

        <div class="tab-pane fade {{ $active == 'why-choose-us-main-content' ? 'active show' : '' }}" id="why-choose-us-main-content">
            @include('admin.pages.why_choose_us.partials.why-choose-us-main-content')
        </div>

        <div class="tab-pane fade {{ $active == 'why-choose-us-membership-previllage' ? 'active show' : '' }}" id="why-choose-us-membership-previllage">
            @include('admin.pages.why_choose_us.partials.why-choose-us-membership-previllage')
        </div>

        <div class="tab-pane fade {{ $active == 'why-choose-us-apply-section' ? 'active show' : '' }}" id="why-choose-us-apply-section">
            @include('admin.pages.why_choose_us.partials.why-choose-us-apply-section')
        </div>

                       
                       


      
    </div>
</div>

@stop