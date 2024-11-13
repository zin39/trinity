@extends('admin.layouts.master')
@section('title')Footer @stop
@section('breadcrum')Edit Footer @stop

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
<script src="{{ asset('admin/js/repeater.js')}}"></script>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card bd-card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="bottom-divided-tab1">
                        <div>
                            <form action="{{ route('admin.pages.footer') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf

                                <fieldset class="mb-1">
                                    @foreach($texts as $key => $value)
                                        @php
                                            $name = ucwords(str_replace('-', ' ', $key));
                                        @endphp
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3">{{ $name }}:</label>
                                            <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                                <div class="input-group">
                                                    <input placeholder="Enter {{ $name }}" value="{{ $value }}" type="text" name="texts[{{ $key }}]" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn bg-teal-400"><i class="icon-check"></i>
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop