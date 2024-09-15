@extends('admin.layouts.master')
@section('title'){{ $page->title }} Edit Page @stop
@section('breadcrum')Edit Page @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
            @csrf
            @include('admin.pages.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop