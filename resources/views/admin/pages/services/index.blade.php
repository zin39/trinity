@extends('admin.layouts.master')
@section('title')Services Page Settings @stop
@section('breadcrum')Services Page Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A342845; color: #4A3428; }
</style>
@php $active = request('active', 'services-main'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#services-main" class="nav-link {{ $active == 'services-main' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Main Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-items" class="nav-link {{ $active == 'services-items' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Service Items
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-cta" class="nav-link {{ $active == 'services-cta' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> CTA Section
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'services-main' ? 'active show' : '' }}" id="services-main">
            @include('admin.pages.services.partials.services-main')
        </div>
        <div class="tab-pane fade {{ $active == 'services-items' ? 'active show' : '' }}" id="services-items">
            @include('admin.pages.services.partials.services-items')
        </div>
        <div class="tab-pane fade {{ $active == 'services-cta' ? 'active show' : '' }}" id="services-cta">
            @include('admin.pages.services.partials.services-cta')
        </div>
    </div>
</div>
@stop
