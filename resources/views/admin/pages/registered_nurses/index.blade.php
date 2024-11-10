

@extends('admin.layouts.master')
@section('title')Registered Nurses Settings @stop
@section('breadcrum')Registered Nurses Settings @stop

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
    $active = request('active', 'registered-nurse-banner');
@endphp
<!-- Form inputs -->
<div class="d-flex"  ng-app="Repeater">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <div class="">
                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#registered-nurse-banner" class="nav-link {{ $active == 'registered-nurse-banner' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                                Banner Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#registered-nurse-main-content" class="nav-link {{ $active == 'registered-nurse-main-content' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               Main Content
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#registered-nurse-how-to-qualify" class="nav-link {{ $active == 'registered-nurse-how-to-qualify' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                               How to Qualify
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#registered-nurse-membership-previllage" class="nav-link {{ $active == 'registered-nurse-membership-previllage' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
                                <i class="icon-images2 me-2"></i>
                              Membership Previllage Area
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#registered-nurse-how-to-get-started" class="nav-link {{ $active == 'registered-nurse-how-to-get-started' ? 'active' : '' }}" data-toggle="tab" aria-selected="true" role="tab">
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
        <div class="tab-pane fade {{ $active == 'registered-nurse-banner' ? 'active show' : '' }}" id="registered-nurse-banner">
            @include('admin.pages.registered_nurses.partials.registered-nurse-banner')
        </div>

        <div class="tab-pane fade {{ $active == 'registered-nurse-main-content' ? 'active show' : '' }}" id="registered-nurse-main-content">
            @include('admin.pages.registered_nurses.partials.registered-nurse-main-content')
        </div>

        <div class="tab-pane fade {{ $active == 'registered-nurse-how-to-qualify' ? 'active show' : '' }}" id="registered-nurse-how-to-qualify">
            @include('admin.pages.registered_nurses.partials.registered-nurse-how-to-qualify')
        </div>

        <div class="tab-pane fade {{ $active == 'registered-nurse-membership-previllage' ? 'active show' : '' }}" id="registered-nurse-membership-previllage">
            @include('admin.pages.registered_nurses.partials.registered-nurse-membership-previllage')
        </div>

        <div class="tab-pane fade {{ $active == 'registered-nurse-how-to-get-started' ? 'active show' : '' }}" id="registered-nurse-how-to-get-started">
            @include('admin.pages.registered_nurses.partials.registered-nurse-how-to-get-started')
        </div>

                       
                       


      
    </div>
</div>

@stop