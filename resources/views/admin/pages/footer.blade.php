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
                                <fieldset class="mb-1" ng-app="Repeater" ng-controller="RepeaterController" ng-init="init({{ $opening_hours ? $opening_hours : '' }})">
                                    <legend class="text-uppercase font-size-sm font-weight-bold">
                                        Opening Hours
                                    </legend>
                                    <div ng-repeat="section in list track by $index">
                                        <div class="form-group row mb-1">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-3 form-group-feedback form-group-feedback-right">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icon-chevron-right"></i>
                                                                </span>
                                                            </span>
                                                            <input type="text" placeholder="Day" name='opening_hours[@{{ $index }}][day]' ng-model="list[$index].day" class='form-control' required />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 form-group-feedback form-group-feedback-right">
                                                        <div class="input-group">
                                                            <span class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icon-chevron-right"></i>
                                                                </span>
                                                            </span>
                                                            <input type="text" placeholder="Timing" name='opening_hours[@{{ $index }}][time]' ng-model="list[$index].time" class='form-control' required />
                                                        </div>
                                                    </div>
                                                    <label class="col-form-label col-lg-2">
                                                        <a href="javascript:;" ng-click="remove($index)" class="text-danger ml-1"><i class="icon-cancel-circle2"></i></a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" ng-click="list.push('')" class="btn btn-sm btn-primary">Add</button>
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