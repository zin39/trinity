@extends('admin.layouts.master')
@section('title')Testimonials Page Settings @stop
@section('breadcrum')Testimonials Page Settings @stop

@section('content')
@php
    $section = optional(isset($sections['testimonials-hero']) ? json_decode($sections['testimonials-hero']) : null);
    $slug = 'testimonials-hero';
@endphp
<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.pages.savepage') }}">
            @csrf
            <input type="hidden" name="slug" value="{{ $slug }}">
            <input type="hidden" name="route" value="testimonials_page">
            <div class="form-group row mb-3">
                <label class="col-form-label col-lg-3">Page Heading:</label>
                <div class="col-lg-9">
                    <input type="text" name="{{ $slug }}[heading]" class="form-control" value="{{ old($slug.'.heading', $section->heading) }}">
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" type="submit"><i class="icon-database-insert mr-2"></i> Save</button>
            </div>
        </form>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <p class="text-muted">To manage individual testimonials and assign them as Candidate or Employer type, go to <a href="{{ route('admin.testimonials.index') }}">Testimonials</a> in the admin menu.</p>
    </div>
</div>
@stop
