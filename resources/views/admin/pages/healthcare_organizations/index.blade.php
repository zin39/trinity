

@extends('admin.layouts.master')
@section('title')Healthcare Organizations Settings @stop
@section('breadcrum')Healthcare Organizations Settings @stop

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
    $active = request('active', 'healthcare-organizations-banner');
@endphp
<!-- Form inputs -->
<div class="d-flex"  ng-app="Repeater">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <div class="">
                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#healthcare-organizations-banner" class="nav-link {{ $active == 'healthcare-organizations-banner' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                                Banner Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#healthcare-organizations-main-content" class="nav-link {{ $active == 'healthcare-organizations-main-content' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Main Content
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#healthcare-organizations-membership-previllage" class="nav-link {{ $active == 'healthcare-organizations-membership-previllage' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              Membership Previllage Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#healthcare-organizations-how-to-get-started" class="nav-link {{ $active == 'healthcare-organizations-how-to-get-started' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
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
        <div class="tab-pane fade {{ $active == 'healthcare-organizations-banner' ? 'active show' : '' }}" id="healthcare-organizations-banner">
            @include('admin.pages.healthcare_organizations.partials.healthcare-organizations-banner')
        </div>

        <div class="tab-pane fade {{ $active == 'healthcare-organizations-main-content' ? 'active show' : '' }}" id="healthcare-organizations-main-content">
            @include('admin.pages.healthcare_organizations.partials.healthcare-organizations-main-content')
        </div>

        <div class="tab-pane fade {{ $active == 'healthcare-organizations-membership-previllage' ? 'active show' : '' }}" id="healthcare-organizations-membership-previllage">
            @include('admin.pages.healthcare_organizations.partials.healthcare-organizations-membership-previllage')
        </div>

        <div class="tab-pane fade {{ $active == 'healthcare-organizations-how-to-get-started' ? 'active show' : '' }}" id="healthcare-organizations-how-to-get-started">
            @include('admin.pages.healthcare_organizations.partials.healthcare-organizations-how-to-get-started')
        </div>

                       
                       


      
    </div>
</div>

@stop