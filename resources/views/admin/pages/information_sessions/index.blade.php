@extends('admin.layouts.master')
@section('title')Information Sessions Settings @stop
@section('breadcrum')Information Sessions Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A342845; color: #4A3428; }
</style>
@php $active = request('active', 'info-sessions-main'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#info-sessions-main" class="nav-link {{ $active == 'info-sessions-main' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Main Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#info-sessions-graduates" class="nav-link {{ $active == 'info-sessions-graduates' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> For Graduates
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#info-sessions-nursing" class="nav-link {{ $active == 'info-sessions-nursing' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> For Nursing Graduates
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#info-sessions-cta" class="nav-link {{ $active == 'info-sessions-cta' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> CTA Section
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'info-sessions-main' ? 'active show' : '' }}" id="info-sessions-main">
            @include('admin.pages.information_sessions.partials.info-sessions-main')
        </div>
        <div class="tab-pane fade {{ $active == 'info-sessions-graduates' ? 'active show' : '' }}" id="info-sessions-graduates">
            @include('admin.pages.information_sessions.partials.info-sessions-graduates')
        </div>
        <div class="tab-pane fade {{ $active == 'info-sessions-nursing' ? 'active show' : '' }}" id="info-sessions-nursing">
            @include('admin.pages.information_sessions.partials.info-sessions-nursing')
        </div>
        <div class="tab-pane fade {{ $active == 'info-sessions-cta' ? 'active show' : '' }}" id="info-sessions-cta">
            @include('admin.pages.information_sessions.partials.info-sessions-cta')
        </div>
    </div>
</div>
@stop
