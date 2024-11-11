@extends('frontend.layouts.main')

@section('content')
  <!-- Start Banner Area
    ============================================= -->
  <div class=""
    style="background-image: url(frontend-assets/img/apply-now/banner.png); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <!-- <div class="banner-style-four-thumb"
      style="background-image: url(frontend-assets/img/banner/banner.png); background-position: center center;"> -->
    <!-- <div class="video-btn">
        <a href="https://www.youtube.com/watch?v=3ctoSEQsY54" class="popup-youtube">
          <i class="fas fa-play"></i>
        </a>
      </div> -->
    <!-- </div> -->
    <!-- <div class="banner-move-animation">
      <img src="frontend-assets/img/shape/56.png" alt="Image Not Found" />
      <img src="frontend-assets/img/shape/16.png" alt="Image Not Found" />
      <img src="frontend-assets/img/shape/57.png" alt="Image Not Found" />
      <img src="frontend-assets/img/shape/18.png" alt="Image Not Found" />
    </div> -->
    <!-- Single Item -->
    <div style="background: #0000003d; height:40%">
      <div class="apply_now_banner_div h-100 d-flex justify-content-center align-center "  >
              <div class="banner-four-info d-flex justify-content-center align-center flex-column">
                <h1 class="registered_nurse_h1">
                   Apply
                </h1>
              </div>
      </div>
    </div>
  </div>
  <!-- End Banner -->

  <!-- awards -->
  <div class="container-xxl text-center  apply_form" style="padding: 3rem 1rem;">
    <form action="{{ route('apply.now') }}" method="POST" class="quote-style-two">
    @csrf
      <p class="title text-center step-title">
        <b>APPLY NOW</b>
      </p>
      <p class="text-left text-primary">
        Please provide your full legal name as it appears on your legal documents (i.e., birth certificate and passport)
      </p>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">First and Middle Name (if applicable) <span style="color:red">*</span></label>
                <input class="form-control" id="first_name" name="first_name" placeholder="Your First and Middle Name" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Last Name <span style="color:red">*</span></label>
                <input class="form-control" id="last_name" name="last_name" placeholder="Your Last Name" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="contact_mode">Preffered Contact Mode <span style="color:red">*</span></label>
                <select id="contact_mode" name="contact_mode">
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bangladesh">Bangladesh</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="email">Email <span style="color:red">*</span></label>
                <input class="form-control" id="email" name="email" placeholder="Your Email" type="email">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group text-left">
              <label for="phone_number" class="phone">Phone <span style="color:red">*</span></label>
              <input type="tel" id="phone_number" name="phone_number" class="form-control w-100" style="" />
          </div>

        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="whatsapp_phone_number">Do you have a WhatsApp phone number? <span style="color:red">*</span></label>
                <select id="whatsapp_phone_number" name="whatsapp_phone_number">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="social_media_profile">Social Media Profile (e.g. Facebook)</label>
                <input class="form-control" id="social_media_profile" name="social_media_profile" placeholder="Your Email" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="currently_working_country">Country Where You are Currently Working <span style="color:red">*</span></label>
                <select id="currently_working_country" name="currently_working_country">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="country_of_birth">Country of Birth <span style="color:red">*</span></label>
                <select id="country_of_birth" name="country_of_birth">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="date_of_birth">Date of Birth <span style="color:red">*</span></label>
                <input class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Your Email" type="date">
            </div>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="working_status">Are you currently working as a nurse?<span style="color:red">*</span></label>
                <select id="working_status" name="working_status">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="years_of_experience">Years of Experience as an RN <span style="color:red">*</span></label>
                <select id="years_of_experience" name="years_of_experience">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="country_of_education">Country of Education <span style="color:red">*</span></label>
                <select id="country_of_education" name="country_of_education">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="initial_education_program">What initial educational programme did you complete to become a Registered Nurse <span style="color:red">*</span></label>
                <select id="initial_education_program" name="initial_education_program">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="university_name">College/University Name <span style="color:red">*</span></label>
                <select id="university_name" name="university_name">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="date_of_gratudation">Date of Graduation<span style="color:red">*</span></label>
                <input class="form-control" id="date_of_gratudation" name="date_of_graduation" placeholder="Your Email" type="date">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left check-qa">
                <label for="qualifications">Have you completed any additional postgraduate qualifications?<span style="color:red">*</span></label>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="qualifications1" name="qualifications[]"  value="N/A" class="mb-1" {{ in_array('N/A',$item->qualifications ?? []) ? 'checked' : ''}}>
                  <label for="qualifications">N/A</label>
                </div>

                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="qualifications2" name="qualifications[]"  value="MSN/MAN" class="mb-1" {{ in_array('N/A',$item->qualifications ?? []) ? 'checked' : ''}}>
                  <label for="qualifications">MSN/MAN</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="qualifications3" name="qualifications[]"  value="Registered Midwife" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">Registered Midwife</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="ICU" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">ICU</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="CCU" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">CCU</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="Renal/Urology" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">Renal/Urology</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="Psychiatry" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">Psychiatry</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="Pediatric" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">Pediatric</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="Anasthesia" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">Anasthesia</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="KRN" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">KRN</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="qualifications[]" value="KRCHN" class="mb-1" {{ in_array('N/A',json_decode($item->qualifications ?? '[]' , true)) ? 'checked' : ''}}>
                  <label for="vehicle1">KRCHN</label>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="specialities">Specialities <span style="color:red">*</span></label>
                      <select id="specialities" name="specialities">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="english_proficiency_test">Have you taken an English Proficiency exam (IELTS, OET, TOEFL, PTE, MET, etc.)? <span style="color:red">*</span></label>
                      <select id="english_proficiency_test" name="english_proficiency_test">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="is_pass_CGFNS">Have you taken and passed the CGFNS Certification Program? <span style="color:red">*</span></label>
                      <select id="is_pass_CGFNS" name="is_pass_CGFNS">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="is_passed_NCLEX">Have you passed the NCLEX exam? <span style="color:red">*</span></label>
                      <select id="is_passed_NCLEX" name="is_passed_NCLEX">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="hear_about_us">How did you hear about us? <span style="color:red">*</span></label>
                      <select id="hear_about_us" name="hear_about_us">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="resume">Resume/CV <span style="color:red">*</span></label>
                      <input class="form-control" id="resume" name="resume" placeholder="Your Email" type="file">
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="unofficial_transcript"> Unofficial Transcripts </label>
                      <input class="form-control" id="unofficial_transcript" name="unofficial_transcript" placeholder="Your Email" type="file">
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="name"> Equal Opportunity Statement </label>
                      <p class="text-sm text-primary mb-0" style="line-height:20px;font-weight:300">
                        <b>Karini</b>Step is an equal opportunity employer encouraging diversity in the workplace. All qualified applicants will receive consideration for
                         employment without regard to citizenship status, race, immigration status, national origin, gender, age, religion, disability, sexual orientation,
                          veteran status, or marital status.  <b>Karini</b>Step offers a range of immigrant and non-immigrant visa sponsorship for qualified applicants
                           needing such assistance.  <b>Karini</b>Step is an international recruitment specialist and our expert team will support you through each step
                           of the application process.
                      </p>
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="privacy_statement"> Privacy Statement </label>
                      <p class="text-sm text-primary mb-0" style="line-height:20px;font-weight:300">
                        <b>Karini</b>Step respects the privacy of applicants and prospective employees and is committed to complying with the privacy laws in every country in
                         which we recruit and hire applicants, including the General Data Protection Regulation in the European Union.  <b>KariniStep's</b> Applicant and Prospective
                          Employee Privacy Policy is intended to inform both applicants and prospective employees about how the personal information  <b>Karini</b>Step processes
                           about each will be handled and protected by  <b>Karini</b>Step. Click on the link below to review the applicant and prospective employee privacy policy.
                      </p>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                    <a href="" class="privacy-link">Applicant and Prospective Employer Privacy Policy</a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left check-qa">
                        <div class="d-flex align-items-center gap-2">
                          <input type="checkbox" id="recieve_applicaiotn_updates" name="recieve_applicaiotn_updates"  value="1" class="mb-0"  >
                          <p class="text-sm text-primary mb-0">I have read and understand the Equal </p>
                        </div>
                        <p class="text-sm text-primary mb-0" >Opportunities and Privacy Statements <span style="color:red">*</span> </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <label for="name">Please type your name here to certify that all the information on this form is true and correct. <span style="color:red">*</span></label>
                        <input class="form-control" id="name" name="name" placeholder="" type="text">
                    </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0">
                          <b>Karini</b>Step is committed to protecting and respecting your privacy, and we’ll only use your personal information
                           to administer your account and to provide the products and services you requested from us. 
                        </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left check-qa">
                        <div class="d-flex align-items-center gap-2">
                          <input type="checkbox" id="vehicle1" name="vehicle1"  value="1" class="mb-0" >
                          <p class="text-sm text-primary mb-0">I agree to receive application updates from  *</p>
                        </div>
                        <p class="text-sm text-primary mb-0" >KariniStep <span style="color:red">*</span> </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0">
                          You may unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices,
                          and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.
                        </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0">
                         By clicking submit below, you consent to allow  <b>Karini</b>Step to store and process the personal information submitted
                          above to provide you the content requested. 
                        </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <img src="/frontend-assets/img/captcha.png" />
                    </div>
                </div>
              </div>

              <button class="btn btn-primary">Submit</button>


        </div>
      </div>

    </form>
  </div>


@endsection
