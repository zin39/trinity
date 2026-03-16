@extends('admin.layouts.master')
@section('title')Homepage Settings @stop
@section('breadcrum')Homepage Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A2E1F45; color: #4A2E1F; }
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
                            <i class="icon-images2 me-2"></i> Split Hero
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#home-about-short" class="nav-link {{ $active == 'home-about-short' ? 'active' : '' }}" data-toggle="tab" role="tab">
                            <i class="icon-images2 me-2"></i> About Short
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
        <div class="tab-pane fade {{ $active == 'home-about-short' ? 'active show' : '' }}" id="home-about-short">
            @include('admin.pages.homepage.partials.home-about-short')
        </div>
    </div>
</div>
@stop
