@extends('admin.layouts.master')
@section('title')Edit Event Category @stop
@section('breadcrum')Edit Event Category @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit Event Category</h5>
        <div class="header-elements">
            <a href="{{ route('admin.event-categories.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.event-categories.update', $category->id) }}">
            @method('PUT')
            @csrf
            @include('admin.event-categories.partial.form')
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop