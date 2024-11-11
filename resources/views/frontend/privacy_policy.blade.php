@extends('frontend.layouts.main')

@section('content')

 
  @php
      $item = json_decode($sections['privacy-policy-banner']);
  @endphp

  <div class=""
    style="background-image: url('{{$item->image}}'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
  
    <div style="background: #0000003d;">
      <div class="registered_nurse_banner_div">
        <div class="container">
          <div class="row align-center">
            <div class="col-lg-12 pr-50 pr-md-15 pr-xs-15">
              <div class="banner-four-info">
                <h1 class="registered_nurse_h1">
                   {!! $item->tagline !!}
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @php
      $item = json_decode($sections['privacy-policy-main-content']);
  @endphp
  <div class="text-center  privacy_policy privacy-points" style="padding: 3rem 1rem;">
  {!! $item->description !!}
  </div>

  <div class="container mb-40 ">
    <h3 class="title text-center">Registered Nurses</h3>
    <p class="text-center default-paragraph mb-0 text-primary" style="line-height: 27px;">Are you ready to Take the <b>STEP</b> to your Australian dream? Apply Now!</p>
    <div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now.html">Apply Now</a>
    </div>
  </div>

  <div class="container mb-40">
    <h3 class="title text-center">Healthcare Organizations</h3>
    <p class="text-center default-paragraph mb-0 text-primary" style="line-height: 27px;">
      Does your organization need registered nurses? We can help!
      Contact us today!</p>
    <div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now.html">Contact Us</a>
    </div>
  </div>
@endsection
