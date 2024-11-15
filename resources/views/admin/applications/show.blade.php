@extends('admin.layouts.master')
@section('title')Edit Application @stop
@section('breadcrum')Edit Application @stop

@section('script')

@stop @section('content')

<!-- Form inputs -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Application of {{$application->first_name}} {{$application->last_name}}</h5>
        <div class="header-elements">
            <a href="{{ route('admin.applications.index') }}" class="btn bg-primary">
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
                {{$application->first_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Last Name :</b>
                </div>

                <div class="col-md-10">
                {{$application->last_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Contact Mode:</b>
                </div>

                <div class="col-md-10">
                {{$application->contact_mode}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Email :</b>
                </div>

                <div class="col-md-10">
                {{$application->email}}
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <b>Phone Number</b>
                </div>

                <div class="col-md-10">
                {{$application->phone_number}}
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <b>Have Whatsapp</b>
                </div>

                <div class="col-md-10">
                {{$application->have_whatsapp ? "Yes" : "No"}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>social_media_profile</b>
                </div>

                <div class="col-md-10">
                {{$application->social_media_profile}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Currently Working Country</b>
                </div>

                <div class="col-md-10">
                {{$application->currently_working_country}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Country of Birth</b>
                </div>

                <div class="col-md-10">
                {{$application->country_of_birth}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Date of Birth</b>
                </div>

                <div class="col-md-10">
                {{$application->date_of_birth}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Are You A Nurse</b>
                </div>

                <div class="col-md-10">
                {{$application->are_you_nurse ? "Yes" : "No"}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Years Of Experience</b>
                </div>

                <div class="col-md-10">
                {{$application->years_of_experience}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Country Of Education</b>
                </div>

                <div class="col-md-10">
                {{$application->country_of_education}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Initial Education Program</b>
                </div>

                <div class="col-md-10">
                {{$application->initial_education_program}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>University Name</b>
                </div>

                <div class="col-md-10">
                {{$application->university_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Date Of Graduation</b>
                </div>

                <div class="col-md-10">
                {{$application->date_of_graduation}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Qualifications</b>
                </div>

                <div class="col-md-10">
                @foreach(json_decode($application->qualifications) as $sp)
                    {{$sp}}
                    @if(!$loop->last),@endif
                @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Specialities</b>
                </div>

                <div class="col-md-10">
                {{$application->specialities}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>English Proficiency Test</b>
                </div>

                <div class="col-md-10">
                {{$application->english_proficiency_test}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>CGFNS</b>
                </div>

                <div class="col-md-10">
                {{$application->is_pass_CGFNS ? "Yes" : "No"}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>NCLEX</b>
                </div>

                <div class="col-md-10">
                {{$application->is_pass_NCLEX ? "Yes" : "No"}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>How Did You Hear About Us</b>
                </div>

                <div class="col-md-10">
                {{$application->hear_about_us}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Resume</b>
                </div>

                <div class="col-md-10">
               <a href="/uploads/form/{{$application->resume}}" target="_blank" download>{{$application->resume}}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Unoffcial Transcript</b>
                </div>

                <div class="col-md-10">
               <a href="/uploads/form/{{$application->unofficial_transcript}}" target="_blank" download>{{$application->unofficial_transcript}}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Signature Name</b>
                </div>

                <div class="col-md-10">
                {{$application->signature_name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <b>Recive Application Updates</b>
                </div>

                <div class="col-md-10">
                    @if($application->has_checked_recieve_application_updates)
                    <i class="icon-check text-success" ></i>
                    @else
                    <i class="icon-cross text-danger" ></i>
                    @endif
                </div>
            </div>
        </div>
    </div>
<!-- /form inputs -->

@stop
