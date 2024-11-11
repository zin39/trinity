@extends('frontend.layouts.main')

@section('content')

 
  @php
      $item = json_decode($sections['apply-now-banner']);
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

  <!-- awards -->
  <div class="container-xxl text-center  apply_form" style="padding: 3rem 1rem;">
    <form action="#" class="quote-style-two">
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
                <input class="form-control" id="name" name="name" placeholder="Your First and Middle Name" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Last Name <span style="color:red">*</span></label>
                <input class="form-control" id="name" name="name" placeholder="Your Last Name" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Preffered Contact Mode <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Nepal</option>
                    <option value="2">India</option>
                    <option value="4">China</option>
                    <option value="5">Bhutan</option>
                    <option value="6">Bangladesh</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Email <span style="color:red">*</span></label>
                <input class="form-control" id="name" name="name" placeholder="Your Email" type="email">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group text-left">
              <label for="phone" class="phone">Phone <span style="color:red">*</span></label>
              <input type="tel" id="phone" class="form-control w-100" style="" />
          </div>

        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Do you have a WhatsApp phone number? <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Social Media Profile (e.g. Facebook)</label>
                <input class="form-control" id="name" name="name" placeholder="Your Email" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Country Where You are Currently Working <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Country of Birth <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Date of Birth <span style="color:red">*</span></label>
                <input class="form-control" id="name" name="name" placeholder="Your Email" type="date">
            </div>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Are you currently working as a nurse?<span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Years of Experience as an RN <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">Country of Education <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">What initial educational programme did you complete to become a Registered Nurse <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="subject">College/University Name <span style="color:red">*</span></label>
                <select id="subject">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Date of Graduation<span style="color:red">*</span></label>
                <input class="form-control" id="name" name="name" placeholder="Your Email" type="date">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left check-qa">
                <label for="name">Have you completed any additional postgraduate qualifications?<span style="color:red">*</span></label>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">N/A</label>
                </div>

                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">MSN/MAN</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">Registered Midwife</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">ICU</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">CCU</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">Renal/Urology</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">Psychiatry</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">Pediatric</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">Anasthesia</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">KRN</label>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-1">
                  <label for="vehicle1">KRCHN</label>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="subject">Specialities <span style="color:red">*</span></label>
                      <select id="subject">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="subject">Have you taken an English Proficiency exam (IELTS, OET, TOEFL, PTE, MET, etc.)? <span style="color:red">*</span></label>
                      <select id="subject">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="subject">Have you taken and passed the CGFNS Certification Program? <span style="color:red">*</span></label>
                      <select id="subject">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="subject">Have you passed the NCLEX exam? <span style="color:red">*</span></label>
                      <select id="subject">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="subject">How did you hear about us? <span style="color:red">*</span></label>
                      <select id="subject">
                          <option value="1">Yes</option>
                          <option value="2">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="name">Resume/CV <span style="color:red">*</span></label>
                      <input class="form-control" id="name" name="name" placeholder="Your Email" type="file">
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="name"> Unofficial Transcripts </label>
                      <input class="form-control" id="name" name="name" placeholder="Your Email" type="file">
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
                      <label for="name"> Privacy Statement </label>
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
                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-0">
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
                          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="mb-0">
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
