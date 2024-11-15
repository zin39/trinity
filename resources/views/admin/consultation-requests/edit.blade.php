@extends('admin.layouts.master')
@section('title')Edit Blog @stop
@section('breadcrum')Edit Blog @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit Blog</h5>
        <div class="header-elements">
            <a href="{{ route('admin.blogs.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.blogs.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop