@extends('admin.layouts.master')
@section('title')Add Testimonial @stop
@section('breadcrum')Add Testimonial @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header pb-0 header-elements-inline">
        <h5 class="card-title">Add Testimonial</h5>
        <div class="header-elements">
            <a href="{{ route('admin.testimonials.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.testimonials.partial.form')
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop