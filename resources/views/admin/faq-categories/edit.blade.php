@extends('admin.layouts.master')
@section('title')Edit FAQ Category @stop
@section('breadcrum')Edit FAQ Category @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit FAQ Category</h5>
        <div class="header-elements">
            <a href="{{ route('admin.faq-categories.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.faq-categories.update', $category->id) }}">
            @method('PUT')
            @csrf
            @include('admin.faq-categories.partial.form')
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop