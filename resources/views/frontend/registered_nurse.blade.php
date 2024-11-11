@extends('frontend.layouts.main')

@section('content')
  <!-- Start Banner Area
    ============================================= -->


  @php
      $item = json_decode($sections['registered-nurse-banner']);
  @endphp

  <div class=""
    style="background-image: url({{$item->image}}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
  
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
      $item = json_decode($sections['registered-nurse-main-content']);
  @endphp
  <!-- awards -->
  <div class="container-xxl text-center p-6 " style="padding: 3rem 2rem;">
    <div class="container p-0 registered_nurse_content">
        {!! $item->description !!}
    </div>


  </div>
 

  @php
      $previllages = \App\Models\Previllage::where('section','registered-nurse-how-to-qualify')->get();
      $item = json_decode($sections['registered-nurse-how-to-qualify']);
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
  <!-- awards end-->



  <div class="default-padding how-it-works-area mt-40">
    <div class="text-center">
      <h2 class="title" style="font-weight:300"><b>How does the
        Karini</b>Step <b>Academy
        Work?</b></h2>
    </div>
    <div class="mb-4">
      <p class="title text-center step-title">
        <b>1. S</b>election
      </p>
      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_1.png" alt="selection_1_1" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.1 Apply Online
          </p>

          <p class="step_sub_desc text-center mb-1">
            Complete our easy online application form:

          </p>
          <p class="step_sub_desc text-center mb-0">
            <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now.html">Apply Now</a>
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_2.png" alt="selection_1_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.2 Interview
          </p>
          <p class="step_sub_desc text-center mb-1">
            Tell us and your future employer about your Australia Dream and nursing experience
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_3.png" alt="selection_1_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.3 Documents
          </p>
          <p class="step_sub_desc text-center mb-1">
            Submit all documents, incl. IELTS 7.0 and NCLEX passes.
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_4.png" alt="selection_1_4" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.4 Accept Offer
          </p>
          <p class="step_sub_desc text-center mb-1">
            Sign your <b>Karini</b>Step <b>Academy</b> agreement
          </p>
        </div>
      </div>
      <p class="title text-center step-title mb-2">
        <b>1. S</b>election <br>
      </p>
      <p class="title text-center step-title">
        <b>COMPLETE!</b>
      </p>
      <div class="d-flex justify-content-center mb-4">
        <img class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/1S.png" alt="Selection Complete" />
      </div>
      <p class="step_sub_desc text-center mb-1">
        Welcome to our <b>Karini</b>Step <b>Academy!</b>
      </p>
    </div>
  </div>
  <div style="position:relative">
    <div  class="connecting_arrow_div" >
      <div>
        <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" />
      </div>
    </div>
  </div>

  <div class="default-padding how-it-works-area-2 mt-2">
    <div class="mb-4">
      <p class="title text-center step-title">
        <b>2. T</b>raining
      </p>
      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/2_1.png" alt="selection_2_1" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            2.1 Online Training
          </p>

          <p class="step_sub_desc text-center mb-1">
            Fast-track your learning with our online training resources
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/2_2.png" alt="selection_2_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            2.2  In-person Education
          </p>
          <p class="step_sub_desc text-center mb-1">
            At our accredited training labs, you'll prepare you for the OBA/OSCE exam
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/2_3.png" alt="selection_2_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            2.3 Cultural Awareness
          </p>
          <p class="step_sub_desc text-center mb-1">
            We'll prepare you for life and culture in Australia

          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/2_4.png" alt="selection_2_4" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            2.4 Sit OBA/OSCE
          </p>
          <p class="step_sub_desc text-center mb-1">
            Our <b>Karini</b>Step <b>Academy</b> alumni have a 95% pass rate!
          </p>
        </div>
      </div>
      <p class="title text-center step-title mb-2">
        <b>2. T</b>raining <br>
      </p>
      <p class="title text-center step-title">
        <b>COMPLETE!</b>
      </p>
      <div class="d-flex justify-content-center mb-4">
        <img  class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/2T.png" alt="Training Complete"  />
      </div>
      <p class="step_sub_desc text-center mb-1">
        You're ready for Your <b>STEP</b> into <b>Employment</b>
      </p>
    </div>
  </div>

  <div style="position:relative">
    <div  class="connecting_arrow_div" >
      <div>
        <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" />
      </div>
    </div>
  </div>

  <div class="default-padding how-it-works-area-3 mt-2">
    <div class="mb-4">
      <p class="title text-center step-title">
        <b>3. E</b>mployment
      </p>
      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/3_1.png" alt="selection_3_1" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            3.1 Employer Interview
          </p>

          <p class="step_sub_desc text-center mb-1">
            We'll match you with Australia's top healthcare providers
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/3_2.png" alt="selection_3_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            3.2  Immigration
          </p>
          <p class="step_sub_desc text-center mb-1">
            We'll support you as you navigate Australia's immigration system
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/3_3.png" alt="selection_3_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            3.3 Documents
          </p>
          <p class="step_sub_desc text-center mb-1">
            We'll assist you with all necessary documentation preparation
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/3_4.png" alt="selection_3_4" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            3.4 Job Start
          </p>
          <p class="step_sub_desc text-center mb-1">
            We'll be at your side as you start your dream job!
          </p>
        </div>
      </div>
      <p class="title text-center step-title mb-2">
        <b>3. E</b>mployment <br>
      </p>
      <p class="title text-center step-title">
        <b>COMPLETE!</b>
      </p>
      <div class="d-flex justify-content-center mb-4">
        <img  class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/3E.png" alt="Employment Complete" />
      </div>
      <div class="d-flex justify-content-center mb-4">
        <div class="card how-it-works-card" style="width:50%">
          <p class="mb-0 p-4 text-primary font-weight-light text-center">
            <b>STEP</b> into Your  <b>dream job</b> and <b>life</b>
            in <b>Australia!</b>
          </p>

        </div>
      </div>
    </div>
  </div>

  <div style="position:relative">
    <div  class="connecting_arrow_div" >
      <div>
        <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" />
      </div>
    </div>
  </div>

  <div class="default-padding how-it-works-area-4 mt-2">
    <div class="mb-4">
      <p class="title text-center step-title">
        <b>4. P</b>athway
      </p>
      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/4_1.png" alt="selection_4_1" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            4.1 Housing Support
          </p>

          <p class="step_sub_desc text-center mb-1">
            We'll assist you in securing your new home and settling in
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/4_2.png" alt="selection_4_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            4.2  Mentoring
          </p>
          <p class="step_sub_desc text-center mb-1">
            You'll get a  mentor to support you during your assimilation to career and life
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/4_3.png" alt="selection_4_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            4.3 Ongoing Training
          </p>
          <p class="step_sub_desc text-center mb-1">
            We'll support you in building the next step in career
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/4_4.png" alt="selection_4_4" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            4.4 Citizenship
          </p>
          <p class="step_sub_desc text-center mb-1">
            After 2 years, you can apply for Permanent Residency; after 4 years, Citizenship!
          </p>
        </div>
      </div>
      <p class="title text-center step-title mb-2">
        <b>4. P</b>athway <br>
      </p>
      <p class="title text-center step-title">
        <b>LAUNCHED!</b>
      </p>
      <div class="d-flex justify-content-center mb-4">
        <img  class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/4P.png" alt="Pathway Launched"  />
      </div>
      <div class="d-flex justify-content-center mb-4">
        <div class="card how-it-works-card" style="width:50%">
          <p class="mb-0 p-4 text-primary font-weight-light text-center">
            Next <b>STEP?</b>
            The sky is the limit!
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-40">
    <p class="text_primary registered_nurse_p mb-0 text-center mt-4  ">
      <b>Karini</b>Step <b>Academy</b>
    </p>
    <p class="mb-0 p-2 text-primary font-weight-light text-center" style="font-weight:300;font-size: 19px;
    line-height: 28px;">
      Offering you a fast, streamlined, supported and cost efficient way to start your dream life as a Nurse in Australia.
    </p>
    <div class="d-flex justify-content-center" >
      <img src="/frontend-assets/img/home/steps.png" alt="KariniStep Academy pathways">
    </div>
  </div>
  <br><br>

  @php
      $previllages = \App\Models\Previllage::where('section','registered-nurse-membership-previllage')->get();
      $item = json_decode($sections['registered-nurse-membership-previllage']);
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
      $item = json_decode($sections['registered-nurse-how-to-get-started']);
  @endphp

  <div class="container default-padding">
    <h3 class="color-primary text-center">{!! $item->title !!}</h3>
    <p class="color-primary text-center">{!! $item->subtitle !!}</p>
    <div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now">{{$item->btntext}}</a>
    </div>
  </div>
@endsection
