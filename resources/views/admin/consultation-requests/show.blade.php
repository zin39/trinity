@extends('admin.layouts.master')
@section('title')Edit Consultation Request @stop
@section('breadcrum')Edit Consultation Request @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Consultation Request for {{$consultationRequest->first_name}} {{$consultationRequest->last_name}}</h5>
        <div class="header-elements">
            <a href="{{ route('admin.consultation-requests.index') }}" class="btn bg-primary">
                <b><i class="icon-esc"></i></b>
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="">
            <div class="row">
                <div class="col-md-2">
                    <b>First Name :</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->first_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Last Name :</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->last_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Company:</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->company}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Email :</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->email}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Phone Number</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->phone_number}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <b>Questions/Comments</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->comments}}
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <b>Respond By Phone</b>
                </div>

                <div class="col-md-10">

                @if($consultationRequest->respond_by_phone)
                    <i class="icon-check text-success" ></i>
                @else
                    <i class="icon-cross text-danger" ></i>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <b>Respond By Email</b>
                </div>

                <div class="col-md-10">
                @if($consultationRequest->respond_by_email)
                    <i class="icon-check text-success" ></i>
                @else
                    <i class="icon-cross text-danger" ></i>
                @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <b>Best time to respond</b>
                </div>

                <div class="col-md-10">
                {{$consultationRequest->best_time_to_respond}}
                </div>
            </div>
           
           
            
        </div>
    </div>
<!-- /form inputs -->

@stop
