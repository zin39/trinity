@extends('frontend.layouts.main')

@section('content')
 
  @php
      $item = json_decode($sections['healthcare-organizations-banner']);
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
      $item = json_decode($sections['healthcare-organizations-main-content']);
  @endphp
  <!-- awards -->
  <div class="container-xxl text-center p-6 " style="padding: 3rem 2rem;">
    <div class="container p-0">
        {!! $item->description !!}
    </div>

  </div>
 



  <div class="default-padding how-it-works-area mt-40">
    <div class="text-center">
      <h2 class="title" style="font-weight:300"><b>How does the
        Karini</b>Step <b>Partnership Work?</b></h2>
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
            1.1 Request a Consultation
          </p>

          <p class="step_sub_desc text-center mb-1">
            Complete our online  consultation form:

          </p>
          <p class="step_sub_desc text-center mb-0">
            <a class="btn btn-theme animation rounded-md btn-md  bg-primary" style="padding:0.2rem 0.3rem;" href="/apply-now.html">Request a Consultation </a>
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_2.png" alt="selection_1_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.2 Consultation
          </p>
          <p class="step_sub_desc text-center mb-1">
            We explore together how we can help stabilise your core staffing needs.
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_3.png" alt="selection_1_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.3 Workshop
          </p>
          <p class="step_sub_desc text-center mb-1">
            We conduct a 1/2 day workshop to consolidate the planning.
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/1_4.png" alt="selection_1_4" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            1.4 Sign agreement
          </p>
          <p class="step_sub_desc text-center mb-1">
            Upon signing, you can interview and select your nurses while they are still overseas.
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
            2.1 One-on-One Coaching
          </p>

          <p class="step_sub_desc text-center mb-1">
            Each Nurse receives individualised coaching during training
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/2_2.png" alt="selection_2_2" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            2.2   Education
          </p>
          <p class="step_sub_desc text-center mb-1">
            Our clinical training - live, online and self-study - keeps nurses on track for success.
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
            Life and culture in Australia is different - we prepare nurses for their new life.

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
        <img class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/2T.png" alt="Training Complete" />
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
            3.1 Final Interview
          </p>

          <p class="step_sub_desc text-center mb-1">
            This is a chance to acquaint them with the team and agree on expectations.
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
            We'll partner with you through the employer-sponsored visa.
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
        <img class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/3E.png" alt="Employment Complete"  />
      </div>
      <div class="d-flex justify-content-center mb-4">
        <div class="card how-it-works-card" style="width:50%">
          <p class="mb-0 p-4 text-primary font-weight-light text-center">
            Welcome your nurses as they <b>STEP</b> into life and career in Australia!
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
            We'll work with you to ensure your nurses have the right housing.
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
            Your nurses will get a <b>Karini</b>Step mentor to support successful assimilation.
          </p>
        </div>
      </div>

      <div class="row mb-40">
        <div class="col-md-6 col-sm-6" style="width: 48%;">
          <img src="/frontend-assets/img/registered_nurses/4_3.png" alt="selection_4_3" />
        </div>
        <div class="col-md-2 col-sm-6" style="width: 50%;">
          <p class="step_sub_title text-center mb-1 ">
            4.3 Ongoing Courses
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
        <img class="r_triangle_img_sm" src="/frontend-assets/img/registered_nurses/4P.png" alt="Pathway Launched" />
      </div>
    </div>
  </div>

  <div class="mb-40">
    <p class="text_primary registered_nurse_p mb-0 text-center mt-4  ">
      <b>Karini</b>Step <b>Partnership™</b>
    </p>
    <p class="mb-0 p-2 text-primary font-weight-light text-center" style="font-weight:300;font-size: 19px;
    line-height: 28px;">
     Offering a <b>strategic partnership </b>for long-term workforce planning to fill <b>on-going staffing needs, reduce costs</b> and <b>deliver patient outcomes.</b>
    </p>
    <div class="d-flex justify-content-center">
      <img src="/frontend-assets/img/home/steps.png" alt="KariniStep Academy pathways">
    </div>
  </div>
  <br><br>

  @php
      $previllages = \App\Models\Previllage::where('section','healthcare-organizations-membership-previllage')->get();
      $item = json_decode($sections['healthcare-organizations-membership-previllage']);
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
      $item = json_decode($sections['healthcare-organizations-how-to-get-started']);
  @endphp


  <div class="container default-padding">
    
  <h3 class="color-primary text-center">{!! $item->title !!}</h3>
    <p class="color-primary text-center">{!! $item->subtitle !!}</p><div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md bg-primary" data-bs-toggle="modal" data-bs-target="#contactFormModal">{{$item->btntext}}</a>
    </div>
  </div>

  <!-- Contact Form Modal -->
  <div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header text-white">
          <h5 class="modal-title" id="contactFormModalLabel">Request a Consultation</h5>
          <a type=""  data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
        <div class="modal-body">
          <form>
            <!-- Name Fields -->
            <div class="mb-3">
              <label for="firstName" class="form-label ">Name <span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-12 mb-2">
                  <input type="text" class="form-control" id="firstName" placeholder="First">
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" id="lastName" placeholder="Last">
                </div>
              </div>
            </div>

            <!-- Company Field -->
            <div class="mb-3">
              <label for="company" class="form-label ">Company</label>
              <input type="text" class="form-control" id="company">
            </div>

            <!-- Phone Field -->
            <div class="mb-3">
              <label for="phone" class="form-label ">Phone <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="phone">
            </div>

            <!-- Email Field -->
            <div class="mb-3">
              <label for="email" class="form-label ">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email">
            </div>

            <!-- Questions/Comments Field -->
            <div class="mb-3">
              <label for="comments" class="form-label ">Questions / Comments</label>
              <textarea class="form-control" id="comments" rows="3"></textarea>
            </div>

            <!-- Respond By Options -->
            <div class="mb-3">
              <label class="form-label ">Respond by</label>
              <div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="respondByPhone">
                  <label class="form-label" for="respondByPhone">Phone</label>
                </div>
                <div class="form-check mt-2">
                  <input class="form-check-input" type="checkbox" id="respondByEmail">
                  <label class="form-label" for="respondByEmail">Email</label>
                </div>
              </div>
            </div>

            <!-- Best Time to Respond Field -->
            <div class="mb-3">
              <label for="bestTime" class="form-label ">Best time to respond</label>
              <input type="text" class="form-control" id="bestTime">
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn-send ">SEND</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

