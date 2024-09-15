@extends('admin.layouts.master')
@section('title'){{ $page->title }} Edit Page @stop
@section('breadcrum'){{ $page->title }} Edit Page @stop

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
<script src="{{ asset('admin/js/repeater.js')}}"></script>
<script>
    angular.element(document).ready(function() {
        angular.bootstrap(document.getElementById("section-5-app"), ['Repeater']);
    });
</script>
@stop 

@section('content')

<!-- /form inputs -->
<form method="POST" action="{{ route('admin.pages.jobs-in-australia') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.pages.jobs-in-australia.partials.section1')
    <div class="row">
        <div class="col-md-6">
            @include('admin.pages.jobs-in-australia.partials.section2')
        </div>
        <div class="col-md-6">
            @include('admin.pages.jobs-in-australia.partials.section3')
        </div>
    </div>
    @include('admin.pages.jobs-in-australia.partials.section4')
    @include('admin.pages.jobs-in-australia.partials.section5')
    @include('admin.pages.jobs-in-australia.partials.section6')
    @include('admin.pages.jobs-in-australia.partials.section7')

    <div class="text-right">
        <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
            <b><i class="icon-database-insert"></i></b> Save
        </button>
    </div>
</form>

@stop