@extends('admin.layouts.master')
@section('title')Create Event @stop
@section('breadcrum')Create Event @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header pb-0 header-elements-inline">
        <h5 class="card-title">Create Event</h5>
        <div class="header-elements">
            <a href="{{ route('admin.events.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
            @csrf
            @include('admin.events.partial.form')
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop