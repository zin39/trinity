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
<form method="POST" action="{{ route('admin.pages.staffing-solutions') }}" enctype="multipart/form-data">
    @csrf
    @include('admin.pages.staffing-solutions.partials.section1')
    @include('admin.pages.staffing-solutions.partials.section2')
    @include('admin.pages.staffing-solutions.partials.section3')
    @include('admin.pages.staffing-solutions.partials.section4')
    @include('admin.pages.staffing-solutions.partials.section5')
    <div class="row">
        <div class="col-md-6">
            @include('admin.pages.staffing-solutions.partials.section6')
        </div>
        <div class="col-md-6">
            @include('admin.pages.staffing-solutions.partials.section7')
        </div>
    </div>
    @include('admin.pages.staffing-solutions.partials.section8')
    @include('admin.pages.staffing-solutions.partials.section9')

    <div class="text-right">
        <button class="ml-2 btn bg-primary btn-labeled btn-labeled-left" type="submit">
            <b><i class="icon-database-insert"></i></b> Save
        </button>
    </div>
</form>

@stop