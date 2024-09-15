@extends('admin.layouts.master')
@section('title')Edit FAQ @stop
@section('breadcrum')Edit FAQ @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Edit FAQ</h5>
        <div class="header-elements">
            <a href="{{ route('admin.faqs.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.faqs.update', $faq->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('admin.faqs.partial.form', ['is_edit' => true])
        </form>
    </div>
</div>
<!-- /form inputs -->

@stop