@extends('admin.layouts.master')
@section('title')Create Sub-Page @stop
@section('breadcrum'){{ $page_name }} > Create Sub-Page @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header pb-0 header-elements-inline">
        <h5 class="card-title">{{ $page_name }} > Create Sub-Page</h5>
        <div class="header-elements">
            <a href="{{ route('admin.pages.edit', $page_id) }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.pages.subpage.store', $page_id) }}" enctype="multipart/form-data">
            @csrf
            @include('admin.subpages.partial.form', ['is_edit' => false])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop