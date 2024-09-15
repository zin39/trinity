@extends('admin.layouts.master')
@section('title')Setting @stop
@section('breadcrum')Edit Setting @stop

@section('script')

@stop
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card bd-card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="bottom-divided-tab1">

                        <div>
                            <form action="{{ route('admin.settings.update') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf

                                <fieldset class="mb-1">
                                    <legend class="text-uppercase font-size-sm font-weight-bold">Basic Company Information</legend>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">Company Name:<span class="text-danger">*</span></label>
                                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                                </span>
                                                <input placeholder="Enter Company Name" value="{{ $setting->company_name }}" type="text" name="company_name" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-3">Company Logo:</label>
                                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-phone"></i></span>
                                                </span>
                                                <input placeholder="Enter Company Logo" type="file" name="company_logo" class="form-control" />
                                            </div>
                                        </div>

                                        <!-- <label class="col-form-label col-lg-3">Company Copyright:</label>
                                        <div class="col-lg-3 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-phone"></i></span>
                                                </span>
                                                <input placeholder="Enter Company Copyright" value="{{ $setting->company_copyright }}" type="text" name="company_copyright" class="form-control" />
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 form-group-feedback form-group-feedback-right">
                                        </div>
                                        <div class="col-lg-9 form-group-feedback form-group-feedback-right">
                                            @if($setting->company_logo !== NULL)
                                            <img id="bannerImage" src="{{ asset($setting->company_logo) }}"
                                                alt="your image" class="preview-image" style="height: 100px;width: auto;" />
                                            @else
                                            <img id="bannerImage" src="{{ asset('admin/default.png') }}" alt="your image"
                                                class="preview-image"
                                                style="height: 100px; width: auto;" />
                                            @endif
                                        </div>
                                    </div>

                                </fieldset>

                                <fieldset class="mb-1">
                                    <legend class="text-uppercase font-size-sm font-weight-bold">Company Address Information</legend>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Contact No:<span class="text-danger">*</span></label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-phone"></i></span>
                                                </span>
                                                <input placeholder="Enter contact number" type="text" value="{{ $setting->contact_no1 }}" name="contact_no1" class="form-control" required />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">Alt. Contact No</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-phone"></i></span>
                                                </span>
                                                <input placeholder="Enter contact number" value="{{ $setting->contact_no2 }}" type="text" name="contact_no2" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Address 1:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                                <input placeholder="Enter Address 1" type="text" name="address1" class="form-control" value="{{ $setting->address1 }}" required />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">Address 2:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                                <input placeholder="Enter Address 2" type="text" name="address2" class="form-control" value="{{ $setting->address2 }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Postcode:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-location4"></i></span>
                                                </span>
                                                <input placeholder="Enter Postcode" type="text" name="postcode" class="form-control" value="{{ $setting->postcode }}" />
                                            </div>
                                        </div>

                                        <label class="col-form-label col-lg-2">Company Email: <span class="text-danger">*</span></label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-envelop5"></i></span>
                                                </span>
                                                <input placeholder="Enter Company Email" type="email" name="company_email" class="form-control" value="{{ $setting->company_email }}" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-form-label col-lg-2">Skype ID:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-skype"></i></span>
                                                </span>
                                                <input placeholder="Enter Skype ID" type="text" name="skype" class="form-control" value="{{ $setting->skype }}" />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">Instagram URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-instagram"></i></span>
                                                </span>
                                                <input placeholder="Enter Instagram URL" type="text" name="instagram_link" class="form-control" value="{{ $setting->instagram_link }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-form-label col-lg-2">Facebook URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-facebook2"></i></span>
                                                </span>
                                                <input placeholder="Enter Facebook URL" type="text" name="facebook_link" class="form-control" value="{{ $setting->facebook_link }}" />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">LinkedIn URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-linkedin"></i></span>
                                                </span>
                                                <input placeholder="Enter LinkedIn URL" type="text" name="linkin_link" class="form-control" value="{{ $setting->linkin_link }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-form-label col-lg-2">Twitter URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-twitter"></i></span>
                                                </span>
                                                <input placeholder="Enter Twitter URL" type="text" name="twitter_link" class="form-control" value="{{ $setting->twitter_link }}" />
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">Youtube URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-play"></i></span>
                                                </span>
                                                <input placeholder="Enter Youtube URL" type="text" name="youtube_link" class="form-control" value="{{ $setting->youtube_link }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Tiktok URL:</label>
                                        <div class="col-lg-4 form-group-feedback form-group-feedback-right">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-music"></i></span>
                                                </span>
                                                <input placeholder="Enter Tiktok URL" type="text" name="tiktok_link" class="form-control" value="{{ $setting->tiktok_link }}" />
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <div class="text-right">
                                    <button type="submit" class="btn bg-teal-400"><i class="icon-plus-circle2"></i>
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