
@php
  $setting = \App\Models\Setting::firstOrFail();
@endphp

<footer class="bg-footer footer-one text-light" style="background-image: url(assets/img/shape/27.png)">
    <div class="container">
      <div class="footer-style-one pt-4">
        <div class="row">
          <!-- Singel Item -->
          <div class="col-lg-4 col-md-12 footer-item ">
            <div class="logo text-center">
              <img src="frontend-assets/img/footer_logo.png" alt="Image Not Found" width="150" height="150" />
            </div>
            <p class="mt-1 text-center ">When you join KariniStep, you're joining a team dedicated to your continuous support while
              emigrating to and living in Australia</p>
            <!-- <div class="f-item about">
              <div class="logo">
                <img src="frontend-assets/img/trnty_logo.png" alt="Image Not Found" />
              </div>
              <h6>Trnyt Healthcare Professionals</h6>

              <div class="opening-hours mt-3">
                <h5>Opening Hours</h5>
                <ul class="opening-list">
                  <li>
                    Mon - Fri <span class="text-end">8:00 AM - 6:00 PM</span>
                  </li>
                  <li>
                    Saturday <span class="text-end">9:00 AM - 5:00 PM</span>
                  </li>
                  <li>Sunday <span class="text-end">Closed</span></li>
                </ul>
              </div>
              <a class="btn btn-theme btn-md animation mt-30" href="/contact-us.html">Contact Us</a>
            </div> -->
          </div>
          <!-- End Singel Item -->

          <div class="col-lg-4 col-12 ">
            <h5 class="text-uppercase text-center color-links" style="font-weight: 300;">Contact Us</h5>
            <ul class="d-flex justify-content-center mt-2">
              <li class="mx-2 social-icon-circle"><a href="{{$setting->instagram_link}}"><img src="frontend-assets/img/illustration/insta.png"
                    alt="icon"></i></a></li>
              <li class="mx-2 social-icon-circle"><a href="{{$setting->facebook_link}}"><img src="frontend-assets/img/illustration/facebook.png"
                    alt="icon"></a>
              </li>
              <li class="mx-2 social-icon-circle"><a href="{{$setting->linkin_link}}"><img src="frontend-assets/img/illustration/linked_in.png"
                    alt="icon"></a>
              </li>
              <li class="mx-2 social-icon-circle"><a href="{{$setting->youtube_link}}"><img src="frontend-assets/img/illustration/youtube.png"
                    alt="icon"></a></li>
              <li class="mx-2 social-icon-circle"><a href="{{$setting->tiktok_link}}"><img src="frontend-assets/img/illustration/tiktok.png"
                    alt="icon"></a>
              </li>
              <li class="mx-2 social-icon-circle"><a href="{{$setting->tiktok_link}}"><img src="frontend-assets/img/illustration/whatsapp.png"
                    alt="icon"></a>
              </li>
            </ul>
            <div>
              <p class="mb-0 mx-5 mt-4 text-center">{{$setting->address1}}</p>
              <p class="text-center">{{$setting->contact_no1}} @if($setting->contact_no2), {{$setting->contact_no2}}@endif</p>
            </div>
          </div>

          <!-- Singel Item -->
          <!-- <div class="col-lg-3 col-md-6 mt-50 footer-item">
            <div class="f-item link">
              <h4 class="widget-title">Healthcare Professionals</h4>
              <ul class="nolist">
                <li>
                  <a href="/jobs-in-australia.html">Jobs in the Australia</a>
                </li>
                <li>
                  <a href="/who-we-are.html">Who We Are</a>
                </li>
                <li>
                  <a href="/why-trnty.html">Why Trnty</a>
                </li>
                <li>
                  <a href="/how-to-qualify.html">How to Qualify</a>
                </li>
                <li>
                  <a href="/the-process.html">The Process</a>
                </li>
                <li>
                  <a href="/referral-bonus-programs.html">Referral Bonuses Program</a>
                </li>
                <li>
                  <a href="/iamtrnty.html">#IamTrnty</a>
                </li>
                <li>
                  <a href="/apply-now.html">Apply Now</a>
                </li>
              </ul>
            </div>
          </div> -->
          <!-- End Singel Item -->

          <!-- Singel Item -->
          <div class="col-lg-4 col-md-6 mb-4 footer-item text-center">
            <div class="f-item link">
              <h4 class="widget-title color-links mb-0">Main Links</h4>
              <ul class="nolist d-flex flex-row flex-lg-column justify-content-center gap-4">
                <li class="main-links-select">
                  <a href="/healthcare-organizations">Healthcare Facilities</a>
                </li>
                <li class="main-links-select">
                  <a href="/why-choose-us">Why Choose Us</a>
                </li>
                <li class="main-links-select">
                  <a href="/registered-nurses">Registered Nurse</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End Singel Item -->

          <!-- Singel Item -->
          <!-- <div class="col-lg-2 col-md-12 footer-item mt-50">
            <div class="f-item contact">
              <h4 class="widget-title">About Us</h4>
              <ul class="nolist">
                <li>
                  <a href="/overview.html">Overview</a>
                </li>
                <li>
                  <a href="/our-core-values.html">Our Core Values</a>
                </li>
                <li>
                  <a href="/meet-our-team.html">Meet Our Team</a>
                </li>
                <li>
                  <a href="/joint-commission-certified.html">Joint Commission Certified</a>
                </li>
                <li>
                  <a href="/our-partners.html">Our Partners</a>
                </li>
                <li>
                  <a href="/faq.html">Frequently Asked Questions</a>
                </li>
                <li>
                  <a href="/upcoming-events.html">Upcoming Events</a>
                </li>
                <li>
                  <a href="/blog.html">Blog</a>
                </li>
                <li>
                  <a href="/corporate-carrers.html">Corporate Careers</a>
                </li>
              </ul>
            </div>
          </div> -->
          <!-- End Singel Item -->
        </div>
      </div>
    </div>

    <!-- <div class="bg-black">
      <div class="container-xxl container">
        <div class="row align-items-center py-5">
          <div class="col-lg-7 col-md-10 col-xs-12">
            <div class="d-flex align-items-start">
              <img src="frontend-assets/img/shape/joint-comission.png" alt="image" />
              <div class="ms-3 joint-content">
                <h4 class="color-white default-paragraph-size mb-1">Joint Commission Certification
                </h4>
                <p class="color-white">Trnty is a Joint Commission Accredited Staffing Agency. The
                  public may contact
                  The
                  Joint Commission’s Office of Quality Monitoring to report any concerns or register
                  complaints about a
                  Joint Commission-certified organization by calling 1.800.994.6610 or emailing
                  complaint@jointcommission.org. Complaints may also be made online. </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-xs-12 text-end cursor-pointer" id="top">
            <img src="frontend-assets/img/shape/arrow-up.png" alt="image" />
          </div>
          <div class="col-lg-3">
            <ul class="d-flex">
              <li class="mx-3"><a href=""><i class="fab fa-facebook-f color-white icon-text-md"
                    aria-hidden="true"></i></a></li>
              <li class="mx-3"><a href=""><i class="fab fa-twitter color-white icon-text-md" aria-hidden="true"></i></a>
              </li>
              <li class="mx-3"><a href=""><i class="fab fa-linkedin color-white icon-text-md"
                    aria-hidden="true"></i></a>
              </li>
              <li class="mx-3"><a href=""><i class="fab fa-youtube-square color-white icon-text-md"
                    aria-hidden="true"></i></a></li>
              <li class="mx-3"><a href=""><i class="fab fa-instagram color-white icon-text-md"
                    aria-hidden="true"></i></a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="license-container">
      <p class="text-center mb-0">Trnty Healthcare Professionals is a member of the Jackson Healthcare family of
        companies
      </p>
    </div> -->

    <!-- Footer Bottom -->
    <div class="footer-bottom" style="background: #4c6f87;">
      <p class="color-white text-center">© KariniStep Pty Ltd</p>
    </div>
    <!-- End Footer Bottom -->
  </footer>



  <!-- jQuery Frameworks
    ============================================= -->
  <script src="frontend-assets/js/jquery-3.6.0.min.js"></script>
  <script src="frontend-assets/js/bootstrap.bundle.min.js"></script>
  <script src="frontend-assets/js/jquery.appear.js"></script>
  <script src="frontend-assets/js/swiper-bundle.min.js"></script>
  <script src="frontend-assets/js/progress-bar.min.js"></script>
  <script src="frontend-assets/js/isotope.pkgd.min.js"></script>
  <script src="frontend-assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="frontend-assets/js/magnific-popup.min.js"></script>
  <script src="frontend-assets/js/count-to.js"></script>
  <script src="frontend-assets/js/jquery.nice-select.min.js"></script>
  <script src="frontend-assets/js/jquery.scrolla.min.js"></script>
  <script src="frontend-assets/js/YTPlayer.min.js"></script>
  <script src="frontend-assets/js/validnavs.js"></script>
  <script src="frontend-assets/js/gsap.js"></script>
  <script src="frontend-assets/js/ScrollTrigger.min.js"></script>
  <script src="frontend-assets/js/rangeSlider.min.js"></script>
  <script src="frontend-assets/js/jquery-ui.min.js"></script>
  <script src="frontend-assets/js/SplitText.min.js"></script>
  <script src="frontend-assets/js/main.js?v=1.2"></script>
  <script src="frontend-assets/custom_js/main.js?v=1.2"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
        </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('#top-bar-cross').on('click',function(){
      console.log("Asd");
      $('#top-bar').attr("hidden",true);
    })
    var input = document.querySelector("#phone_number");
    window.intlTelInput(input, {
      separateDialCode: true,
      preferredCountries: ["au","ph"],  // You can set preferred countries here
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",  // For formatting/validation
    });



  });
</script>
@if ($errors->any())
<div class="modal fade" id="successModel" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header text-white  text-center">
          <h5 class="modal-title w-100" id="contactFormModalLabel">Submit Unsuccessful</h5>
          <a type=""  data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
        <div class="modal-body">
         Please fill out all the necessary information.
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#successModel').modal('show');
    });
  </script>
@endif

  <!-- Contact Form Modal -->
  <div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header text-white">
          <h5 class="modal-title" id="contactFormModalLabel">Request a Consultation</h5>
          <a type=""  data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
        <div class="modal-body">
          <form action="{{route('apply.save-consultation')}}" method="POST">
            @csrf
            <!-- Name Fields -->
            <div class="mb-3 text-left">
              <label for="firstName" class="form-label ">Name <span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-12 mb-2">
                  <input type="text" class="form-control" required name="first_name" id="firstName" placeholder="First">
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" required name="last_name" id="lastName" placeholder="Last">
                </div>
              </div>
            </div>

            <!-- Company Field -->
            <div class="mb-3 text-left">
              <label for="company" class="form-label ">Company</label>
              <input type="text" class="form-control" name="company" id="company">
            </div>

            <!-- Phone Field -->
            <div class="mb-3 text-left">
              <label for="phone" class="form-label ">Phone <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" required name="phone_number"  id="phone">
            </div>

            <!-- Email Field -->
            <div class="mb-3 text-left">
              <label for="email" class="form-label ">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" required name="email" id="email">
            </div>

            <!-- Questions/Comments Field -->
            <div class="mb-3 text-left">
              <label for="comments" class="form-label ">Questions / Comments</label>
              <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>
            </div>

            <!-- Respond By Options -->
            <div class="mb-3 text-left">
              <label class="form-label ">Respond by</label>
              <div>
                <div class="form-check d-flex align-items-center">
                      <label class="custom-checkbox" >
                        <input class="form-check-input" name="respond_by_phone" type="checkbox" id="respondByPhone">
                        <span> Phone
                        </span>
                      </label>
                </div>
                <div class="form-check mt-2 d-flex align-items-center">
                      <label class="custom-checkbox" >
                        <input class="form-check-input" name="respond_by_email" type="checkbox" id="respondByEmail">
                        <span> Email
                        </span>
                      </label>
                </div>
              </div>
            </div>

            <!-- Best Time to Respond Field -->
            <div class="mb-3 text-left">
              <label for="bestTime" class="form-label ">Best time to respond</label>
              <input type="text" class="form-control" name="best_time_to_respond" id="bestTime">
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
@if (session()->has('message'))

<div class="modal fade" id="successModel" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header text-white  text-center">
          <h5 class="modal-title w-100" id="contactFormModalLabel">Your Form has been submitted</h5>
          <a type=""  data-bs-dismiss="modal" aria-label="Close">X</a>
        </div>
        <div class="modal-body">
          Thank you for filling out the form. Our team member will be in touch with you soon
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#successModel').modal('show');
      localStorage.clear();

    });
  </script>


  @endif
@yield('js')
