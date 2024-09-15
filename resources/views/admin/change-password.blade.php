@extends('admin.layouts.master')
@section('title')Change Password @stop
@section('breadcrum')Change Password @stop

@section('script')
    <!-- Theme JS files -->
    
    <!-- /theme JS files -->

@stop 
@section('content')

    <!-- Form inputs -->
    <div class="card">
        <div class="card-header bg-dark header-elements-inline">
            <h5 class="card-title">Change Password</h5>
            <div class="header-elements">

            </div>
        </div>

        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('admin.update-password') }}">
                @csrf
                <fieldset class="mb-3">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Old Password:</label>
                        <div class="col-lg-10">
                            <input placeholder="Old Password" type="text" name="old_password" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">New Password:</label>
                        <div class="col-lg-10">
                            <input placeholder="New Password" type="text" name="password" class="form-control" required />
                        </div>
                    </div>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn bg-teal-400">Update Password <i class="icon-paperplane ml-2"></i></button>
                </div>

            </form>

        </div>
    </div>
    <!-- /form inputs -->

@stop