@extends('admin.layouts.master')
@section('title')Edit Testimonial @stop
@section('breadcrum')Edit Testimonial @stop

@section('script')

<!-- /theme JS files -->

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit Testimonial</h5>
        <div class="header-elements">
            <a href="{{ route('admin.testimonials.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.testimonials.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop