@extends('frontend.layouts.main')

@section('content')
    <!-- Start Banner Area 
        ============================================= -->
    <div class="banner-style-four-area bg-dark text-light">
        <div class="banner-style-four-thumb" style="background-image: url({{ asset('frontend-assets/img/banner/banner3.jpg') }})">
            <div class="video-btn">
                <a href="https://www.youtube.com/watch?v=3ctoSEQsY54" class="popup-youtube">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
        <div class="banner-move-animation">
            <img src="{{ asset('frontend-assets/img/shape/56.png') }}" alt="Image Not Found" />
            <img src="{{ asset('frontend-assets/img/shape/16.png') }}" alt="Image Not Found" />
            <img src="{{ asset('frontend-assets/img/shape/57.png') }}" alt="Image Not Found" />
            <img src="{{ asset('frontend-assets/img/shape/18.png') }}" alt="Image Not Found" />
        </div>
        <!-- Single Item -->
        <div class="banner-style-four">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6 pr-50 pr-md-15 pr-xs-15">
                        <div class="banner-four-info">
                            <h2>
                                <strong>TRNTY</strong>: Let's Build the Future of Nursing
                            </h2>
                            <p>
                                Start your career in the Australia as a registered nurse,
                                physical therapist or occupational therapist with Trnty!
                            </p>
                            <div class="button mt-40">
                                <a class="btn btn-theme btn-md animation" href="shop.html">Carrer in the Australia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Feature
        ============================================= -->
    <div class="feature-style-three-area default-padding">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> Our Features</h4> -->
                        <h2 class="title split-text">Amazing features</h2>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6">
                        <p>
                            Need nurses? We assist clients in overcoming their staffing
                            challenges with registered nurses and allied health
                            professionals.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="fun-fact-style-two">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="500" data-speed="3000">500</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Healthcare Professionals</span>
                        </div>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="250" data-speed="3000">250</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">HealthCare Organizations</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-10 pl-80 pl-md-15 pl-xs-15">
                    <div class="feature-style-three-items">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-style-three-item animate" data-animate="fadeInUp">
                                    <img src="{{ asset('frontend-assets/img/icon/61.png') }}" alt="Image Not Found" />
                                    <h4>Passion</h4>
                                    <p>
                                        We care about and believe in our services and our
                                        opportunities.
                                    </p>
                                    <a href="#">Learn More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-style-three-item animate" data-animate="fadeInUp" data-delay="100ms">
                                    <img src="{{ asset('frontend-assets/img/icon/60.png') }}" alt="Image Not Found" />
                                    <h4>Teamwork</h4>
                                    <p>
                                        We respect one another and help each other to be
                                        successful.
                                    </p>
                                    <a href="#">Learn More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-lg-4 col-md-6">
                                <div class="feature-style-three-item animate" data-animate="fadeInUp" data-delay="200ms">
                                    <img src="{{ asset('frontend-assets/img/icon/59.png') }}" alt="Image Not Found" />
                                    <h4>Integrity</h4>
                                    <p>
                                        We are people of our word. Our guiding principle is
                                        straight talk.
                                    </p>
                                    <a href="#">Learn More <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- carrer start -->
    <!-- <div class="carrer-style">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-1 align-self-center">
            <h3>Start Your USA Career Journey Now!</h3>
            <p>
                Take the first step toward your new life and new career by completing our online application form today. You could be working in the U.S. in as little as 12 months!
            </p>
            <div class="equal-flex">
                <div class="button">
                <a class="btn btn-theme btn-md animation rounded-md" href="shop.html">Apply Now</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> -->
    <!-- carrer end -->

    <!-- Start About
        ============================================= -->
    <div class="about-style-foura-rea default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 pr-100 pr-md-15 pr-xs-15">
                    <div class="about-style-four-thumb">
                        <img class="animate" data-animate="fadeInUp" src="{{ asset('frontend-assets/img/home/img8.j') }}pg" alt="Image Not Found" />
                        <img class="animate" data-animate="fadeInLeft" data-delay="300ms" src="{{ asset('frontend-assets/img/home/img9.j') }}pg"
                            alt="Image Not Found" />
                        <div class="short-card animate" data-animate="fadeInRight" data-delay="500ms">
                            <div class="icon">
                                <img src="{{ asset('frontend-assets/img/icon/66.png') }}" alt="Image Not Found" />
                            </div>
                            <div class="info">
                                <h5>We’re always here to help you</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 align-self-center">
                    <div class="about-style-four-info">
                        <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> About Company</h4> -->
                        <h2 class="title split-text">
                            Start Your Australia Career Journey Now!
                        </h2>
                        <p>
                            Take the first step toward your new life and new career by completing our online application form today. You could be working in the U.S. in as little as 12 months!
                        </p>
                        <ul class="list-style-five">
                            <li>
                                <h4>Achieve Your American Dream</h4>
                                <p>
                                    Since 2003, we have made thousands of dreams come true for
                                    international healthcare professionals.
                                </p>
                            </li>
                            <li>
                                <h4>Changing Lives Together</h4>
                                <p>
                                    Hospitals across the U.S. trust Trnty Healthcare
                                    Professionals as their long-term RN staffing partner.
                                </p>
                            </li>
                        </ul>
                        <div class="f-flex align-items-center mt-20">
                            <a class="btn btn-theme btn-md animation" href="shop.html">Apply Now</a>
                            <div class="social-list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- awards -->
    <div class="container-xxl text-center default-padding">
        <h3>Awards & Accolades</h3>
        <div class="container">
            <div class="award-swiper">
                <div class="awards-carousel swiper">
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img1.jpg') }}" alt="awards" />
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img2.jpg') }}" alt="awards" />
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img3.png') }}" alt="awards" />
                        </div>
                        <!-- End Single Item -->
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img4.jpg') }}" alt="awards" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img5.jpg') }}" alt="awards" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img6.jpg') }}" alt="awards" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img7.jpg') }}" alt="awards" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/awards/img8.jpg') }}" alt="awards" />
                        </div>
                    </div>
                    <!-- Add Arrows -->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <!-- awards end-->

    <!-- Start Team 
        ============================================= -->
    <div class="team-style-two-area default-padding-top bottom-less bg-dark bg-cover"
        style="background-image: url({{ asset('frontend-assets/img/shape/banner-10.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> Team Members</h4> -->
                    <h2 class="title split-text">Meet our expert team</h2>
                    <a class="btn btn-theme btn-md animation" href="#">Join Our Team</a>
                </div>
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="team-style-two-item">
                        <div class="thumb">
                            <div class="img-container">
                                <img src="{{ asset('frontend-assets/img/team/img1.jpg') }}" alt="Image Not Found" />
                            </div>
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay">
                            <div class="content">
                                <h4><a href="#">Joseph Carrion</a></h4>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="team-style-two-item">
                        <div class="thumb">
                            <div class="img-container">
                                <img src="{{ asset('frontend-assets/img/team/img2.jpg') }}" alt="Image Not Found" />
                            </div>
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay">
                            <div class="content">
                                <h4><a href="#">Claire Divas</a></h4>
                                <span>Management Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="team-style-two-item">
                        <div class="thumb">
                            <div class="img-container">
                                <img src="{{ asset('frontend-assets/img/team/girl.jpg') }}" alt="Image Not Found" />
                            </div>
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="team-overlay">
                            <div class="content">
                                <h4><a href="#">Woseph Carter</a></h4>
                                <span>Senior Advisor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Start Award
        ============================================= -->
    <div class="award-style-one-area default-padding">
        <div class="container">
            <div class="row align-center mb-5">
                <div class="col-lg-6">
                    <div class="award-thumb pe-0">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/slHN-lELYP8?si=hJnj744gmif8hfHA"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <!-- <img src="assets/img/shape/22.png" alt="Image Not Found" />
                <img src="assets/img/icon/41.png" alt="Image Not Found" />
                <img src="assets/img/illustration/4.png" alt="Image Not Found" /> -->
                    </div>
                </div>
                <div class="col-lg-6 pl-80 pl-md-15 pl-xs-15">
                    <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> Award Winning</h4> -->
                    <h2 class="title split-text">Achieve Your American Dream</h2>
                    <p class="split-text">
                        Since 2003, we have made thousands of dreams come true for
                        international healthcare professionals. From our prestigious
                        support programs to our highly experienced teams, no one knows
                        international staffing like we do.
                    </p>
                    <p class="fw-bold">
                        Are you an RN, PT or OT ready to start your dream?
                    </p>
                    <a class="btn btn-theme btn-md animation" href="#">Learn More</a>
                </div>
            </div>
            <div class="row align-center">

                <div class="col-lg-6 order-2 order-lg-1">
                    <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> Award Winning</h4> -->
                    <h2 class="title split-text">Changing Lives
                        Together</h2>
                    <p class="split-text">
                        Hospitals across the U.S. trust Avant Healthcare Professionals as their long-term RN staffing partner. Let's
                        fill your chronic nursing staff shortage and change lives. Together.


                    </p>
                    <p class="fw-bold">
                        Are you an RN, PT or OT ready to start your dream?
                    </p>
                    <a class="btn btn-theme btn-md animation" href="#">Learn More</a>
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
    </div>
    <!-- End Award -->

    <!-- Start Choose Us
        ============================================= -->
    <div class="choose-us-style-three-area default-padding" style="background-image: url({{ asset('frontend-assets/img/shape/28.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-us-style-three-info">
                        <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found"> Why Choose Us</h4> -->
                        <h2 class="title split-text">
                            Hire Registered Nurses & Therapists Now
                        </h2>
                        <ul class="list-style-six mt-40">
                            <li class="animate" data-animate="fadeInUp">
                                <span>01</span>
                                <!-- <h4>You don't have to wonder anymore where to hire RNs, PTs and OTs. You've come to the right place! </h4> -->
                                <p>
                                    You don't have to wonder anymore where to hire RNs, PTs and
                                    OTs. You've come to the right place!
                                </p>
                            </li>
                            <li class="animate" data-animate="fadeInUp" data-delay="100ms">
                                <span>02</span>
                                <!-- <h4>Anytime Money Back</h4> -->
                                <p>
                                    Trnty Healthcare Professionals is the premier nurse staffing
                                    agency for registered nurses and allied health
                                    professionals.
                                </p>
                            </li>
                            <li class="animate" data-animate="fadeInUp" data-delay="200ms">
                                <span>03</span>
                                <!-- <h4>Professional Company</h4> -->
                                <p>We have Med/Surg, L&D, Peds and OR registered nurses!</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="choose-us-style-three-thumb">
                        <div class="img-container">
                            <img class="animate" data-animate="fadeInUp" src="{{ asset('frontend-assets/img/home/img10.jpg') }}" alt="Image Not Found" />
                        </div>
                        <div class="card-style-two bg-theme text-light animate" data-animate="fadeInRight" data-delay="300ms">
                            <img src="{{ asset('frontend-assets/img/icon/44.png') }}" alt="Image Not Found" />
                            <h4>
                                We’ve more than 1000 expectionally trained internatonal nurses
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->

    <!-- Start Blog 
        ============================================= -->
    <div class="blog-area home-blog default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <!-- <h4 class="sub-title"><img src="assets/img/icon/home-3.png" alt="Image Not Found">News & Blog</h4> -->
                        <h2 class="title split-text">Recent Blog Posts</h2>
                        <p class="text-center default-paragraph">
                            Stay up-to-date with our latest news and announcements on the
                            Trnty blog.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item animate" data-animate="fadeInUp">
                        <div class="img-container">
                            <img src="{{ asset('frontend-assets/img/blog/img1.jpg') }}" alt="Image not Found" />
                        </div>
                        <div class="content">
                            <div class="info">
                                <ul class="d-flex justify-content-between">
                                    <li>July 24, 2024</li>
                                </ul>
                                <h4 class="blog-title">
                                    <a href="#" class="fw-bold">Nars Joni: The Journey of an International Nursem</a>
                                </h4>
                                <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item animate" data-animate="fadeInUp" data-delay="100ms">
                        <div class="img-container">
                            <img src="{{ asset('frontend-assets/img/blog/img2.jpg') }}" alt="Image not Found" />
                        </div>
                        <div class="content">
                            <div class="info">
                                <ul class="d-flex justify-content-between">
                                    <li>October 18, 2024</li>

                                </ul>
                                <h4 class="blog-title">
                                    <a href="#" class="fw-bold">Driving Sustainability in Healthcare: Trnty's Global
                                        Impact</a>
                                </h4>

                                <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-4 col-md-6 col-lg-6 mb-30">
                    <div class="home-blog-style-one-item animate" data-animate="fadeInUp" data-delay="200ms">
                        <div class="img-container">
                            <img src="{{ asset('frontend-assets/img/blog/img1.jpg') }}" alt="Image not Found" />
                        </div>
                        <div class="content">
                            <div class="info">
                                <ul class="d-flex justify-content-between">
                                    <li>August 26, 2024</li>

                                </ul>
                                <h4 class="blog-title">
                                    <a href="#" class="fw-bold">Dream. Become. Inspire. Meet Manny, RN.</a>
                                </h4>
                                <a href="#" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- upcoming events -->
    <div class="container-xxl container default-padding">
        <h3 class="title text-center">Upcoming Events</h3>
        <p class="text-center default-paragraph pb-4">
            Want to connect? Come and see us at one of our upcoming events or just
            contact us today.
        </p>
        <a href="/">
            <p class="text-center more-posts mb-0">See all events</p>
        </a>
    </div>
    <!-- end upcoming events -->

    <!-- hire nurses -->
    <!-- <div class="default-padding bg-gray">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-1 align-self-center">
            <h3 class="hire-title text-center">
                Hire Registered Nurses & Therapists Now
            </h3>
            <p class="text-center default-paragraph">
                You don't have to wonder anymore where to hire RNs, PTs and OTs.
                You've come to the right place! Trnty Healthcare Professionals is the
                premier nurse staffing agency for registered nurses and allied health
                professionals.
            </p>
            <p class="text-center fw-bold color-black default-paragraph-size">We have Med/Surg, L&D, Peds and OR
                registered nurses!</p>
            <div class="equal-flex">
                <div class="button">
                <a class="btn btn-theme btn-md animation rounded-md" href="shop.html">Apply Now</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> -->
    <!-- end of hire nurses -->

    <!-- <div class="license-container">
        <p class="text-center mb-0 text-uppercase">POEA License Number: POEA-040-LB-061914-PA • EDI Staffbuilders
        International</p>
    </div> -->
@endsection