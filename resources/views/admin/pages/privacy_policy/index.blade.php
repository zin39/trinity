

@extends('admin.layouts.master')
@section('title')Privacy Policy Settings @stop
@section('breadcrum')Privacy Policy Settings @stop

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
    $active = request('active', 'privacy-policy-banner');
@endphp
<!-- Form inputs -->
<div class="d-flex"  ng-app="Repeater">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <div class="">
                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#privacy-policy-banner" class="nav-link {{ $active == 'privacy-policy-banner' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                                Banner Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#privacy-policy-main-content" class="nav-link {{ $active == 'privacy-policy-main-content' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Main Content
                            </a>
                        </li>
                     
                        <li class="nav-item" role="presentation">
                            <a href="#privacy-policy-apply-section" class="nav-link {{ $active == 'privacy-policy-apply-section' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              Apply Area
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'privacy-policy-banner' ? 'active show' : '' }}" id="privacy-policy-banner">
            @include('admin.pages.privacy_policy.partials.privacy-policy-banner')
        </div>

        <div class="tab-pane fade {{ $active == 'privacy-policy-main-content' ? 'active show' : '' }}" id="privacy-policy-main-content">
            @include('admin.pages.privacy_policy.partials.privacy-policy-main-content')
        </div>

        <div class="tab-pane fade {{ $active == 'privacy-policy-apply-section' ? 'active show' : '' }}" id="privacy-policy-apply-section">
            @include('admin.pages.privacy_policy.partials.privacy-policy-apply-section')
        </div>
      
    </div>
</div>

@stop