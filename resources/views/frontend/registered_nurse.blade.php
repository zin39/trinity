@extends('frontend.layouts.main')

@section('content')
  <!-- Start Banner Area
    ============================================= -->
  <div class=""
    style="background-image: url(assets/img/registered_nurses/registered_nurse_banner.png); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <!-- <div class="banner-style-four-thumb"
      style="background-image: url(assets/img/banner/banner.png); background-position: center center;"> -->
    <!-- <div class="video-btn">
        <a href="https://www.youtube.com/watch?v=3ctoSEQsY54" class="popup-youtube">
          <i class="fas fa-play"></i>
        </a>
      </div> -->
    <!-- </div> -->
    <!-- <div class="banner-move-animation">
      <img src="assets/img/shape/56.png" alt="Image Not Found" />
      <img src="assets/img/shape/16.png" alt="Image Not Found" />
      <img src="assets/img/shape/57.png" alt="Image Not Found" />
      <img src="assets/img/shape/18.png" alt="Image Not Found" />
    </div> -->
    <!-- Single Item -->
    <div style="background: #0000003d;">
      <div class="registered_nurse_banner_div">
        <div class="container">
          <div class="row align-center">
            <div class="col-lg-8 pr-50 pr-md-15 pr-xs-15">
              <div class="banner-four-info">
                <h1 class="registered_nurse_h1">
                    <b>Karini</b>Step's
                    International Programme for Registered Nurses
                </h1>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Banner -->

  <!-- awards -->
  <div class="container-xxl text-center p-6 " style="padding: 3rem 2rem;">
    <h3 class="mb-3 text_primary registered_nurse_h3"><b>Karini</b>Step <b>Academy</b></h3>
    <div class="container p-0">
      <p class="text_primary registered_nurse_p">
        <b>Karini</b>Step's <b>Academy</b> leads all activities necessary for foreign-educated registered nurses to qualify for and work in Australia. That includes:
      </p>
      <p class="text_primary registered_nurse_p mb-0">
        <b>S</b>election
      </p>
      <p class="text_primary registered_nurse_p">
        Ensuring you’ve got the pre-requisites for our <b>fast-track;</b>
      </p>

      <p class="text_primary registered_nurse_p mb-0">
        <b>T</b>raining
      </p>
      <p class="text_primary registered_nurse_p">
        Our <b>Karini</b>Step <b>Academy</b> is your 'passport' to Registration;
      </p>


      <p class="text_primary registered_nurse_p mb-0">
        <b>E</b>mployment
      </p>
      <p class="text_primary registered_nurse_p">
        We match you with Australia's top healthcare providers, supporting you through immigration;
      </p>

      <p class="text_primary registered_nurse_p mb-0">
        <b>P</b>athway
      </p>
      <p class="text_primary registered_nurse_p">
        Mentoring and assimilation support for your life and career in Australia.
      </p>
    </div>


  </div>
  <div class="card bg_primary_card ">
    <div class="container p-4">
      <h3 class="mb-4">KariniStep Academy - <br>
        How to Qualify? </h3>

        <div class="row">
          <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class=" px-4 py-3 membership-card">
                    <div class="d-flex justify-content-center">
                      <img src="/assets/img/icon/nursing_licence.png" style="height:4rem"/>

                    </div>
                    <div class="">
                      Hold a current registered nursing licence within your country of residence (subject to verification)
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <p class="text-sm py-4 px-4 mb-0">
                    We can only bring currently registered nurses into our Academy.  So, it's important that you have your nursing licence up-to-date as this will be a key qualifying document.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class=" px-4 py-3 membership-card">
                    <div class="d-flex justify-content-center">
                        <img src="/assets/img/icon/nursing_exp.png" style="height:4rem" />
                    </div>
                    <div>
                        Registered Nurse currently working, ideally with 5-10 years experience
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <p class="text-sm py-4 px-4 mb-0">
                    Ideally, our clients are looking for nurses with 5-10 years of experience.  Nursing can be stressful, and experience counts.  Having said that, exceptional recent graduates can also apply.
                  </p>
                </div>


              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class=" px-4 py-3 membership-card">
                    <div class="d-flex justify-content-center">
                        <img src="/assets/img/icon/ielts.png" style="height:4rem"/>
                        <img src="/assets/img/icon/nclex.png" style="height:4rem"/>
                    </div>
                    <div >
                      Have passed IELTS (or equivalent) 7.0 and NCLEX, or intend to qualify
                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <p class="text-sm py-4 px-4 mb-0">
                    If you've already passed IELTS (or equivalent) and scored 7.0 or above, you're on the fast-track. If you've already passed NCLEX, you'll be placed in our priority cohort.
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <div class=" px-4 py-3 membership-card">
                    <div class="d-flex justify-content-center">
                      <img src="/assets/img/icon/australia.png" style="height:4rem"/>

                    </div>
                    <div class="">
                        Very interested in pursuing lifestyle & career development in Australia, and be flexible on assignment location

                    </div>
                  </div>
                </div>
                <div class="flip-card-back">
                  <p class="text-sm py-4 px-4 mb-0">
                    Australia is an amazing country!  If you're very interested in coming here here to work and live for the longer-term, and you're open to different locations, you're exactly the nurse we're looking for!
                  </p>
                </div>
              </div>


            </div>

          </div>
        </div>

        <br>
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
          <img src="/assets/img/registered_nurses/1_1.png" alt="selection_1_1" />
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
          <img src="/assets/img/registered_nurses/1_2.png" alt="selection_1_2" />
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
          <img src="/assets/img/registered_nurses/1_3.png" alt="selection_1_3" />
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
          <img src="/assets/img/registered_nurses/1_4.png" alt="selection_1_4" />
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
        <img src="/assets/img/registered_nurses/1S.png" alt="Selection Complete" style="width: 50%;" />
      </div>
      <p class="step_sub_desc text-center mb-1">
        Welcome to our <b>Karini</b>Step <b>Academy!</b>
      </p>
    </div>
  </div>
  <div style="position:relative">
    <div  class="connecting_arrow_div" >
      <div>
        <img src="/assets/img/icon/white_arrow_down.png" alt="arrow" />
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
          <img src="/assets/img/registered_nurses/2_1.png" alt="selection_2_1" />
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
          <img src="/assets/img/registered_nurses/2_2.png" alt="selection_2_2" />
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
          <img src="/assets/img/registered_nurses/2_3.png" alt="selection_2_3" />
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
          <img src="/assets/img/registered_nurses/2_4.png" alt="selection_2_4" />
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
        <img src="/assets/img/registered_nurses/2T.png" alt="Training Complete" style="width: 50%;" />
      </div>
      <p class="step_sub_desc text-center mb-1">
        You're ready for Your <b>STEP</b> into <b>Employment</b>
      </p>
    </div>
  </div>

  <div style="position:relative">
    <div  class="connecting_arrow_div" >
      <div>
        <img src="/assets/img/icon/white_arrow_down.png" alt="arrow" />
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
          <img src="/assets/img/registered_nurses/3_1.png" alt="selection_3_1" />
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
          <img src="/assets/img/registered_nurses/3_2.png" alt="selection_3_2" />
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
          <img src="/assets/img/registered_nurses/3_3.png" alt="selection_3_3" />
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
          <img src="/assets/img/registered_nurses/3_4.png" alt="selection_3_4" />
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
        <img src="/assets/img/registered_nurses/3E.png" alt="Employment Complete" style="width: 50%;" />
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
        <img src="/assets/img/icon/white_arrow_down.png" alt="arrow" />
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
          <img src="/assets/img/registered_nurses/4_1.png" alt="selection_4_1" />
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
          <img src="/assets/img/registered_nurses/4_2.png" alt="selection_4_2" />
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
          <img src="/assets/img/registered_nurses/4_3.png" alt="selection_4_3" />
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
          <img src="/assets/img/registered_nurses/4_4.png" alt="selection_4_4" />
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
        <img src="/assets/img/registered_nurses/4P.png" alt="Pathway Launched" style="width: 50%;" />
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
    <div>
      <img src="/assets/img/home/steps.png" alt="KariniStep Academy pathways">
    </div>
  </div>
  <br><br>

  <div class="membership-area default-padding mt-40" >
    <div class="container">
      <h4 class="text-center"><b>With our <br> Karini</b>Step <b>Academy <sup style="font-size:10px;top: -12px; left:-3px">TM</sup></b>, membership has its privileges.</h4>

      <div class="row">
        <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="card px-4 py-3 membership-card">
                  <div class="d-flex justify-content-center">
                    <img src="assets/img/icon/save-money.png" alt="icon" width="50" height="50" />
                  </div>
                  <div class="h-20">
                    <h6 class="color-primary mt-3"><b>Zero Immigration advisor cost</b></h6>
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
                <p class="text-sm py-4 px-4 mb-0">
                  Navigating Immigration is expensive.  We take the hassle, cost and time out of the process!  All <b>Karini</b>Step <b>Academy</b> Alumni receive <b>free immigration guidance</b> to navigate Immigration and secure their visa.
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="card px-4 py-3 membership-card">
                  <div class="d-flex justify-content-center">
                    <img src="assets/img/icon/ledger.png" alt="icon" width="50" height="50" />
                  </div>
                  <div class="h-20">
                    <h6 class="color-primary mt-3"><b>Zero OSCE Training Course costs</b></h6>
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
                <p class="text-sm py-4 px-4 mb-0">
                  Our <b>Karini</b>Step Academy</b> offers world-class and accredited <b>training courses, free!</b> We will prepare you for passing OSCE and registration - We have an industry-leading 95% pass rate!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="card px-4 py-3 membership-card">
                  <div class="d-flex justify-content-center">
                    <img src="assets/img/icon/exam.png" alt="icon" width="50" height="50" />
                  </div>
                  <div class="h-20">
                    <h6 class="color-primary mt-3"><b>Fly Now, Pay Later for OSCE exam</b></h6>
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
                <p class="text-sm py-4 px-4 mb-0">
                  We understand that money can sometimes be an issue.  That's why we offer our nurses a <b>interest-free loans</b>.  So you can <b>Fly Now, Pay Later</b>, and accelerate starting your dream job!
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-xl-3 col-md-6 col-12 mt-4 mt-lg-0">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <div class="card px-4 py-3 membership-card">
                  <div class="d-flex justify-content-center">
                    <img src="assets/img/icon/support.png" alt="icon" width="50" height="50" />
                  </div>
                  <div class="h-20">
                    <h6 class="color-primary mt-3"><b>24/7 Carrer-Mentoring Support</b></h6>
                  </div>
                </div>
              </div>
              <div class="flip-card-back">
                <p class="text-sm py-4 px-4 mb-0">
                  We're committed to your successful onboarding, so we go above and beyond!  You'll be assigned your <b>own personal mentor and coach, free of charge </b>for those challenging first 12 months.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="container default-padding">
    <h3 class="color-primary text-center">How To Get Started</h3>
    <p class="color-primary text-center">Are you ready to Take the Step to your Australian dream? Apply Now!</p>
    <div class="button mt-4 mt-lg-0 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now.html">Apply Now</a>
    </div>
  </div>
@endsection
