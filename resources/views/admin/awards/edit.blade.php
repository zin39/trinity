@extends('admin.layouts.master')
@section('title')Edit Award @stop
@section('breadcrum')Edit Award @stop

@section('script')
<!-- Theme JS files -->
<script src="{{asset('admin/global/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script src="{{asset('admin/global/js/demo_pages/form_inputs.js')}}"></script>

<!-- /theme JS files -->

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit Award</h5>
        <div class="header-elements">
            <a href="{{ route('admin.awards.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.awards.update', $award->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.awards.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop