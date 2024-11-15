@extends('frontend.layouts.main')

@section('content')

 
@php
      $item = json_decode($sections['why-choose-us-banner']);
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
  <!-- End Banner -->
  @php
      $item = json_decode($sections['why-choose-us-main-content']);
  @endphp
  <!-- awards -->
  <div class="container-xxl text-center p-6 " style="padding: 3rem 2rem;">
    <div class="container p-0 registered_nurse_content">
        {!! $item->description !!}
    </div>

  </div>
 


  <!--- Caraousel Start !----->
<div class="testimonial-carousel">
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Testimonial 1 -->
            <div class="carousel-item active mb-4">
                <div class="testimonial-item" data-bs-toggle="modal" data-bs-target="#teamMemberModal">
                    <div class="circular-image">
                        <img src="/frontend-assets/img/team/karissa.png" alt="Testimonial 1">
                    </div>
                    <h4 class="testimonial-name">Nick Lee, MBA</h4>
                    <p class="testimonial-position">CEO & Founder</p>
                    <p class="testimonial-text">"Unlike other agencies, looking to exploit the situation, our mission is to create lasting solutions."</p>
                </div>
            </div>

            <!-- Add more testimonials as needed -->
            <div class="carousel-item">
                <div class="testimonial-item mb-4">
                    <div class="circular-image">
                        <img src="path-to-your-image-2.jpg" alt="Testimonial 2">
                    </div>
                    <h4 class="testimonial-name">Another Person</h4>
                    <p class="testimonial-position">Position Title</p>
                    <p class="testimonial-text">"Your testimonial text here."</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="teamMemberModal" tabindex="-1" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="circular-image">
                    <img src="/frontend-assets/img/team/karissa.png" alt="Team Member">
                </div>
                <h4 class="team-name">Nick Lee, MBA</h4>
                <p class="team-position">CEO & Founder</p>
                <p class="team-bio">
                    Nick has over 15 years of CEO experience leading Business Units and Country Teams in Philips and Adecco across Europe, Asia and Australasia. As a Lean advanced practitioner, Nick is passionate about Value, Quality, and Continuous Improvement. He has always been passionate about healthcare - his mother was a nurse - and during his career he launched global innovations like the Philips Airfryer, promoting healthy eating at home.
                </p>
                <p class="modal-email">Nick@KariniStep.com</p>
            </div>
        </div>
    </div>
</div>

@php
      $previllages = \App\Models\Previllage::where('section','why-choose-us-membership-previllage')->get();
      $item = json_decode($sections['why-choose-us-membership-previllage']);
  @endphp

  <div class="membership-area default-padding mt-0" >
    <div class="container">
      <h4 class="text-center">
        <b>{!! $item->title !!}</b>
      </h4>

      <div class="row">
        @foreach($previllages as $prev)
        <div class="col-xl-3 col-md-6 col-12 mt-4 ">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="card px-4 py-3 membership-card">
                  <div class="d-flex justify-content-center">
                    <img src="/uploads/page/{{$prev->icon1}}" alt="icon" width="50" height="50" />
                  </div>
                  <div class="h-20">
                    <h6 class="color-primary mt-3"><b>{!! $prev->title !!}</b></h6>
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
              {!! $prev->description !!}
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
  </div>
  @php
      $item = json_decode($sections['why-choose-us-apply-section']);
  @endphp



  <div class="container mb-30">
    <h3 class="color-primary text-center m-4" style="font-weight: 300; ">{!! $item->title !!}</h3>
    <p class="color-primary text-center registered_nurse_p" style="line-height:32px">
    {!! $item->subtitle !!}
  </p>
  </div>

  <div class="container mb-30">
    <h3 class="color-primary text-center mt-4">{!! $item->title2 !!}</h3>
    <p class="color-primary text-center registered_nurse_p" style="line-height:32px">
    {!! $item->subtitle2 !!}
    </p>
    <div class="button m-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now">{{ $item->btntext2}}</a>
    </div>
  </div>


  <div class="container mb-30">
    <h3 class="color-primary text-center m-3">{!! $item->title3 !!}</h3>
    <p class="color-primary text-center registered_nurse_p" style="line-height:32px">Healthcare <b>Organizations</b>
    {!! $item->subtitle3 !!}
      </p>
    <div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md bg-primary" data-bs-toggle="modal" data-bs-target="#contactFormModal"> {!! $item->btntext3 !!}</a>
    </div>
  </div>

@endsection
