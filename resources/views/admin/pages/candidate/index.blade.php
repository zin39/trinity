@extends('admin.layouts.master')
@section('title')Candidate Page Settings @stop
@section('breadcrum')Candidate Page Settings @stop

@section('content')
<style>
    .nav-sidebar .nav-link { color: #333; }
    .nav-sidebar .nav-link.active { background-color: #4A2E1F45; color: #4A2E1F; }
</style>
@php $active = request('active', 'candidate-hero'); @endphp
<div class="d-flex">
    <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none pr-2">
        <div class="sidebar-content">
            <div class="card">
                <ul class="nav nav-sidebar" role="tablist">
                    <li class="nav-item">
                        <a href="#candidate-hero" class="nav-link {{ $active == 'candidate-hero' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Hero
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#candidate-pathways" class="nav-link {{ $active == 'candidate-pathways' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Pathways
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#candidate-values" class="nav-link {{ $active == 'candidate-values' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Values
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#candidate-services" class="nav-link {{ $active == 'candidate-services' ? 'active' : '' }}" data-toggle="tab">
                            <i class="icon-images2 me-2"></i> Industries
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content flex-fill">
        <div class="tab-pane fade {{ $active == 'candidate-hero' ? 'active show' : '' }}" id="candidate-hero">
            @include('admin.pages.candidate.partials.candidate-hero')
        </div>
        <div class="tab-pane fade {{ $active == 'candidate-pathways' ? 'active show' : '' }}" id="candidate-pathways">
            @include('admin.pages.candidate.partials.candidate-pathways')
        </div>
        <div class="tab-pane fade {{ $active == 'candidate-values' ? 'active show' : '' }}" id="candidate-values">
            @include('admin.pages.candidate.partials.candidate-values')
        </div>
        <div class="tab-pane fade {{ $active == 'candidate-services' ? 'active show' : '' }}" id="candidate-services">
            @include('admin.pages.candidate.partials.candidate-services')
        </div>
    </div>
</div>
@stop
