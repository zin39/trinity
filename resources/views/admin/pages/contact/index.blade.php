@extends('admin.layouts.master')
@section('title')Contact Page Settings @stop
@section('breadcrum')Contact Page Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A2E1F45; color: #4A2E1F; }
</style>
@php $active = request('active', 'contact-main'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#contact-main" class="nav-link {{ $active == 'contact-main' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Main Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-details" class="nav-link {{ $active == 'contact-details' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Contact Details
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'contact-main' ? 'active show' : '' }}" id="contact-main">
            @include('admin.pages.contact.partials.contact-main')
        </div>
        <div class="tab-pane fade {{ $active == 'contact-details' ? 'active show' : '' }}" id="contact-details">
            @include('admin.pages.contact.partials.contact-details')
        </div>
    </div>
</div>
@stop
