@extends('frontend.layouts.main')

@section('content')
  <!-- Start Banner Area
    ============================================= -->

    @php
        $item = json_decode($sections['home-banner-area']);
    @endphp
  <div class=""
    style="background-image: url({{$item->image}}); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <!-- <div class="banner-style-four-thumb"
      style="background-image: url(frontend-assets/img/banner/banner.png); background-position: center center;"> -->
    <!-- <div class="video-btn">
        <a href="https://www.youtube.com/watch?v=3ctoSEQsY54" class="popup-youtube">
          <i class="fas fa-play"></i>
        </a>
      </div> -->
    <!-- </div> -->
    <!-- <div class="banner-move-animation">
      <img src="/frontend-assets/img/shape/56.png" alt="Image Not Found" />
      <img src="/frontend-assets/img/shape/16.png" alt="Image Not Found" />
      <img src="/frontend-assets/img/shape/57.png" alt="Image Not Found" />
      <img src="/frontend-assets/img/shape/18.png" alt="Image Not Found" />
    </div> -->
    <!-- Single Item -->
    <div class="overlay">
      <div class="banner-style-four">
        <div class="container">
          <div class="row align-center justify-content-center">
            <div class="col-lg-8 pr-50 pr-md-15 pr-xs-15">

              <div class="banner-four-info text-center">
                <h2 >
                  {{$item->tagline}}
                </h2>

                <div class="button mt-40 banner-button">
                  <p class="mb-1 text-center p-0">
                    {{$item->button1_title}}
                  </p>
                  <a class="btn btn-theme animation" href="{{$item->button1_link}}">{{$item->button1_text}}</a>
                </div>
                <div class="button mt-15 banner-button">
                  <p class="mb-1 text-center p-0">
                  {{$item->button2_title}}
                  </p>
                  <a class="btn btn-theme btn-md animation" href="{{$item->button2_link}}"> {{$item->button2_text}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Banner -->

  <!-- awards -->
  <div class="container-xxl text-center default-padding">
    <!-- <h3 class="mb-4">Awards & Accolades</h3> -->
    <div class="container">
      <div class="award-swiper">
        <div class="awards-carousel swiper">
          <div class="swiper-wrapper">
            <!-- Single Item -->
            @foreach($awards as $award)
            <div class="swiper-slide d-flex align-items-center" style="height:9rem">
              <img src="{{$award->image}}" alt="awards"/>
            </div>
            @endforeach
          </div>
          <!-- Add Arrows -->
        </div>

        <div class="swiper-button-prev swiper-button-prev-award" style="top:50%" >
          <i class="fa fa-caret-left text-primary" style="font-size:30px"></i>
        </div>
        <div class="swiper-button-next swiper-button-next-award" style="top:50%">
          <i class="fa fa-caret-right  text-primary" style="font-size:30px"></i>

        </div>

      </div>
    </div>
  </div>
  <!-- awards end-->

  <!-- Start Feature
    ============================================= -->

    @php
        $item = json_decode($sections['home-nurses-testimonials-area']);
    @endphp
  <div class="default-padding">
    <div class="text-center">
      <!-- <h4 class="sub-title"><img src="/frontend-assets/img/icon/home-3.png" alt="Image Not Found"> Our Features</h4> -->
      <h2 class="title">{{$item->title}}</h2>
    </div>
    <!-- Start Testimonial
    ============================================= -->
    <div class="testimonial-style-two-area text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-style-two-carousel swiper">
              <div class="swiper-wrapper mb-4">
                <!-- Single Item -->
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                  <div class="circle-avatar">
                    <img src="{{$testimonial->image}}" alt="testimonial" />
                  </div>
                  <div class="testimonial-card mt-85 mb-0 text-left text-primary text-lg testimonial_message_div">
                     {!! $testimonial->message !!}
                    <p class="text-right mb-0 text-primary text-lg" >- {{$testimonial->name}}</p>
                  </div>
                </div>
                @endforeach


              </div>
              <div class="swiper-pagination-counter"></div>
              <!-- Add Arrows -->
            </div>
            <!-- <div class="testimonial-bullet-items">
              <div class="testimonial-bullet swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="swiper-bullet-item">
                      <img src="/frontend-assets/img/team/v1.jpg" alt="Image Not Found">
                      <div class="rev-author">
                        <h4>Nicholas Natteau</h4>
                        <span>Founder & CEO</span>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-bullet-item">
                      <img src="/frontend-assets/img/team/v2.jpg" alt="Image Not Found">
                      <div class="rev-author">
                        <h4>Kevin Martin</h4>
                        <span>Product Manager</span>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="swiper-bullet-item">
                      <img src="/frontend-assets/img/team/v3.jpg" alt="Image Not Found">
                      <div class="rev-author">
                        <h4>Aleesha Brown</h4>
                        <span>Developer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="swiper-button-prev swiper-button-prev-testimonial">
              <img src="/frontend-assets/img/icon/arrow-left.png"/>
            </div>
            <div class="swiper-button-next swiper-button-next-testimonial">
              <img src="/frontend-assets/img/icon/arrow-right.png"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonial -->
  </div>
  </div>
  </div>
  <!-- End Feature -->

  @php
      $item = json_decode($sections['home-registered-nurse-take-step']);
  @endphp

  <div class="default-padding">
    <div class="text-center">
      <h2 class="title">{!! $item->title !!}</h2>
    </div>
    <p class="text-center default-paragraph pb-4 text-primary">
    {!! $item->subtitle !!}
    </p>
    <div class="button mt-4  apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now">{!! $item->applyBtnText !!}</a>
    </div>
  </div>

  <div class="default-padding how-it-works-area">
    <div class="text-center">
      <h2 class="title">How it works</h2>
    </div>
    <p class="text-center default-paragraph pb-4 text-primary">We're here to support, guide and assist you through the <b>STEP</b> to
      Registered Nurse in Australia</p>
    <div class="d-flex justify-content-center">
          <img src="/frontend-assets/img/home/steps.png" alt="arrow" />
    </div>
    <div  class="image_arrow_div d-flex justify-content-center ">
      <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" height="80" />
    </div>
    <div class="container">
        <div class="d-flex justify-content-center mb-4">
          <img src="/frontend-assets/img/home/step_selection.png" alt="arrow" height="160" />
        </div>
      <div class="d-flex justify-content-center mb-4">
        <div>
          <div class="card how-it-works-card">
            <p class="mb-0 p-4 text-primary font-weight-light text-center"><span class="color-green">APPLY</span> and complete your profile. We'll organize an
              online and in person practical interview. If you've got
              what it takes, you'll be <span class="color-green">SELECTED</span> to join our fast-track <b
                class="color-primary">Karini</b>Step <b class="color-primary">Academy</b></p>
          </div>
          <div class="oval-container">
            <img src="/frontend-assets/img/services/service_1.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="">
        <div  class="d-flex justify-content-center mb-2">
          <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" height="80" />
        </div>
        <div class="d-flex justify-content-center mb-4">
          <img src="/frontend-assets/img/home/step_training.png" alt="arrow" />
        </div>
        <div class="d-flex justify-content-center mb-4">
          <div class="card how-it-works-card " >
            <p class="mb-0 p-4 text-primary font-weight-light text-center">Our <span class="color-green">TRAINING</span> at the <b
                class="color-primary">Karini</b>Step <b class="color-primary">Academy</b> is your path to passing the
              online MCQ and
              in-person OBA exams. Our expert team will prepare you to add our <b class="color-primary">95% pass
                rate</b>, first time!</p>
          </div>

        </div>
      </div>

        <div class="d-flex flex-column align-itenms-center">
          <div class="oval-container-vertical img-container">
            <img src="/frontend-assets/img/services/service_2.png" alt="img" />
          </div>
        </div>
      </div>
      <div  class="d-flex justify-content-center mb-2">
          <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" height="80" />
        </div>
        <div class="d-flex justify-content-center mb-4">
          <img src="/frontend-assets/img/home/step_employment.png" style="height:25rem" alt="arrow" />
        </div>
      <div class="d-flex flex-column flex-lg-row justify-content-center mt-5">

        <div>
          <div class="card how-it-works-card">
            <p class="mb-0 p-4 text-primary font-weight-light text-center">Once you're Registered, we secure your <span class="color-green">EMPLOYMENT</span> and help
              you negotiate immigration bureaucracy to secure your visa and <b class="color-primary">start your
                Australian nursing carrer</b> ! All this <b class="color-primary">in less than 9 months</b>.</p>
          </div>
          <div class="oval-container img-container">
            <img src="/frontend-assets/img/services/service_3.png" alt="img" />
          </div>
          <div  class="d-flex justify-content-center mb-2">
            <img src="/frontend-assets/img/icon/white_arrow_down.png" alt="arrow" height="80" />
          </div>
          <div class="d-flex justify-content-center mb-4">
            <img src="/frontend-assets/img/home/step_pathways.png" alt="arrow" />
          </div>
          <div class="card how-it-works-card">
            <p class="mb-0 p-4 text-primary font-weight-light text-center">
              On-going support is at the heart of our  <span class="color-green">PATHWAY</span>.  We want you to thrive, both professionally and personally - that's our promise.
                So, you get <b>your own personal mentor for a full 12 months, free!</b>
              </p>
          </div>
          <div class="oval-container img-container mt-4">
            <img src="/frontend-assets/img/services/service_4.png" alt="img" />
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="default-padding">

    <!-- Start Testimonial
    ============================================= -->
    <div class="testimonial-style-two-area text-center pb-0" >

        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="testimonial-style-two-carousel swiper" >
                <div class="swiper-wrapper mb-4">
                  <!-- Single Item -->
                  @foreach($teams as $team)
                  <div class="swiper-slide" >

                    <div class="testimonial-card-our-team mt-8 bg-primary ml-4 mr-4 d-flex flex-column justify-content-between gap-4" style="border:10px solid #1b4991">
                      <div class="">
                        <img src="{{ $team->image}}" alt="testimonial"  style="height: 7rem;"/>
                      </div>
                      <div>
                        <h3 >{{$team->name}}</h3>
                      </div>
                      <div>
                        <h4>
                          {!! $team->designation !!}
                        </h4>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
                <!-- Add Arrows -->
              </div>

              <div class="swiper-button-prev swiper-button-prev-testimonial" style="top:65%;left:8%">
                <i class="fa fa-caret-left text-primary" style="font-size:30px"></i>
              </div>
              <div class="swiper-button-next swiper-button-next-testimonial" style="top:65%;right:8%">
                <i class="fa fa-caret-right  text-primary" style="font-size:30px"></i>

              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- End Testimonial -->
  </div>





  @php
      $previllages = \App\Models\Previllage::where('section','home-membership-previllage')->get();
      $item = json_decode($sections['home-membership-previllage']);
  @endphp

  <div class="membership-area default-padding mt-0" >
    <div class="container">
      <h4 class="text-center">
        {!! $item->title !!}
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
      $item = json_decode($sections['home-latest-news']);
  @endphp


  <div class="get-started-area" style="background-image: url({{$item->image}});">
    <div class="overlay default-padding">
      <div class="container">
        <!-- <div class="card get-started-card"> -->
        <h2 class="text-center color-primary">{!! $item->title !!}</h2>
        <p class="text-center text-primary default-paragraph">
          {!! $item->subtitle !!}
        </p>
        <div class="button mt-4  text-center">
          <a class="btn outline-btn animation rounded-md btn-md color-primary" href="/blog.html"><b>
            {!!$item->btntext !!}
          </b></a>
        </div>
      </div>
    </div>
  </div>




  <!-- Start Award
    ============================================= -->
  <!-- <div class="award-style-one-area default-padding">
    <div class="container">
      <div class="row align-center mb-5">
        <div class="col-lg-6">
          <div class="award-thumb pe-0">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/slHN-lELYP8?si=hJnj744gmif8hfHA"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
  <!-- <img src="/frontend-assets/img/shape/22.png" alt="Image Not Found" />
              <img src="/frontend-assets/img/icon/41.png" alt="Image Not Found" />
              <img src="/frontend-assets/img/illustration/4.png" alt="Image Not Found" /> -->
  <!-- </div>
        </div>
        <div class="col-lg-6 pl-80 pl-md-15 pl-xs-15"> -->
  <!-- <h4 class="sub-title"><img src="/frontend-assets/img/icon/home-3.png" alt="Image Not Found"> Award Winning</h4> -->
  <!-- <h2 class="title split-text">Achieve Your Australian Dream</h2>
          <p class="split-text">
            Since 2003, we have made thousands of dreams come true for
            international healthcare professionals. From our prestigious
            support programs to our highly experienced teams, no one knows
            international staffing like we do.
          </p>
          <p class="fw-bold">
            Are you an RN, PT or OT ready to start your dream?
          </p>
          <a class="btn btn-theme btn-md animation" href="/jobs-in-australia.html">Learn More</a>
        </div>
      </div>
      <div class="row align-center">

        <div class="col-lg-6 order-2 order-lg-1"> -->
  <!-- <h4 class="sub-title"><img src="/frontend-assets/img/icon/home-3.png" alt="Image Not Found"> Award Winning</h4> -->
  <!-- <h2 class="title split-text">Changing Lives
            Together</h2>
          <p class="split-text">
            Hospitals across the Australia trust Trnty Healthcare Professionals as their long-term RN staffing partner.
            Let's
            fill your chronic nursing staff shortage and change lives. Together.


          </p>
          <p class="fw-bold">
            Are you an RN, PT or OT ready to start your dream?
          </p>
          <a class="btn btn-theme btn-md animation" href="/staffing-solutions.html">Learn More</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="award-thumb pe-0">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/BXBJ6Idkx_A?si=IZsiSqkHxvXVQtjY"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Award -->

  <!-- Start Choose Us
    ============================================= -->
  <!-- <div class="choose-us-style-three-area default-padding" style="background-image: url(frontend-assets/img/shape/28.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="choose-us-style-three-info"> -->
  <!-- <h4 class="sub-title"><img src="/frontend-assets/img/icon/home-3.png" alt="Image Not Found"> Why Choose Us</h4> -->
  <!-- <h2 class="title split-text">
              Hire Registered Nurses & Therapists Now
            </h2>
            <ul class="list-style-six mt-40">
              <li class="animate" data-animate="fadeInUp">
                <span>01</span> -->
  <!-- <h4>You don't have to wonder anymore where to hire RNs, PTs and OTs. You've come to the right place! </h4> -->
  <!-- <p>
                  You don't have to wonder anymore where to hire RNs, PTs and
                  OTs. You've come to the right place!
                </p>
              </li>
              <li class="animate" data-animate="fadeInUp" data-delay="100ms">
                <span>02</span> -->
  <!-- <h4>Anytime Money Back</h4> -->
  <!-- <p>
                  Trnty Healthcare Professionals is the premier nurse staffing
                  agency for registered nurses and allied health
                  professionals.
                </p>
              </li>
              <li class="animate" data-animate="fadeInUp" data-delay="200ms">
                <span>03</span> -->
  <!-- <h4>Professional Company</h4> -->
  <!-- <p>We have Med/Surg, L&D, Peds and OR registered nurses!</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="choose-us-style-three-thumb">
            <div class="img-container">
              <img class="animate" data-animate="fadeInUp" src="/frontend-assets/img/home/img10.jpg" alt="Image Not Found" />
            </div>
            <div class="card-style-two bg-theme text-light animate" data-animate="fadeInRight" data-delay="300ms">
              <img src="/frontend-assets/img/icon/44.png" alt="Image Not Found" />
              <h4>
                We’ve more than 1000 expectionally trained internatonal nurses
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Choose Us -->

  <!-- Start Blog
    ============================================= -->
  <div class="blog-area home-blog default-padding bg-gray bottom-less">
    <div class="container mt-3">
      <!-- <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="site-heading text-center"> -->
      <!-- <h4 class="sub-title"><img src="/frontend-assets/img/icon/home-3.png" alt="Image Not Found">News & Blog</h4> -->
      <!-- <h2 class="title split-text">Recent Blog Posts</h2>
            <p class="text-center default-paragraph">
              Stay up-to-date with our latest news and announcements on the
              Trnty blog.
            </p>
          </div>
        </div>
      </div> -->
      <div class="row">
        @foreach($blogs as $blog)
        <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
          <div class="home-blog-style-one-item animate" data-animate="fadeInUp">
            <div class="img-container">
              <img src="{{$blog->banner}}" alt="Image not Found" />
            </div>
            <div class="content">
              <div class="info">
                <ul class="d-flex justify-content-between">
                  <li>July 24, 2024</li>
                </ul>
                <h4 class="blog-title">
                  <a href="/blog-single.html" class="fw-bold">{{$blog->title}}</a>
                </h4>
                <a href="/blog-single.html" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- End Blog -->

  @php
      $item = json_decode($sections['home-how-to-get-started']);
  @endphp


  <div class="container default-padding">
    <h3 class="title text-center">{!! $item->title !!}</h3>
    <p class="text-center default-paragraph mb-0 text-primary" style="line-height: 27px;">
    {!! $item->subtitle !!}
    </p>
    <div class="button mt-4 apply-btn text-center">
      <a class="btn btn-theme animation rounded-md btn-md  bg-primary" href="/apply-now">{{$item->btntext}}</a>
    </div>
  </div>
@endsection
