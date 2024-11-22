@extends('frontend.layouts.main')
@section('css')
<style>
 .nice-select>span {
            display: block;
            overflow-x: hidden;

}
.nice-select.open .list {
        overflow-x: auto;
    }
</style>
@endsection
@section('content')


  @php
      $item = json_decode($sections['apply-now-banner']);
      $countries = [
        [ "name" => "Afghanistan", "flag"=> "🇦🇫" ],
    [ "name" => "Albania", "flag"=> "🇦🇱" ],
    [ "name" => "Algeria", "flag"=> "🇩🇿" ],
    [ "name" => "Andorra", "flag"=> "🇦🇩" ],
    [ "name" => "Angola", "flag"=> "🇦🇴" ],
    [ "name" => "Antigua and Barbuda", "flag"=> "🇦🇬" ],
    [ "name" => "Argentina", "flag"=> "🇦🇷" ],
    [ "name" => "Armenia", "flag"=> "🇦🇲" ],
    [ "name" => "Australia", "flag"=> "🇦🇺" ],
    [ "name" => "Austria", "flag"=> "🇦🇹" ],
    [ "name" => "Azerbaijan", "flag"=> "🇦🇿" ],
    [ "name" => "Bahamas", "flag"=> "🇧🇸" ],
    [ "name" => "Bahrain", "flag"=> "🇧🇭" ],
    [ "name" => "Bangladesh", "flag"=> "🇧🇩" ],
    [ "name" => "Barbados", "flag"=> "🇧🇧" ],
    [ "name" => "Belarus", "flag"=> "🇧🇾" ],
    [ "name" => "Belgium", "flag"=> "🇧🇪" ],
    [ "name" => "Belize", "flag"=> "🇧🇿" ],
    [ "name" => "Benin", "flag"=> "🇧🇯" ],
    [ "name" => "Bhutan", "flag"=> "🇧🇹" ],
    [ "name" => "Bolivia", "flag"=> "🇧🇴" ],
    [ "name" => "Bosnia and Herzegovina", "flag"=> "🇧🇦" ],
    [ "name" => "Botswana", "flag"=> "🇧🇼" ],
    [ "name" => "Brazil", "flag"=> "🇧🇷" ],
    [ "name" => "Brunei", "flag"=> "🇧🇳" ],
    [ "name" => "Bulgaria", "flag"=> "🇧🇬" ],
    [ "name" => "Burkina Faso", "flag"=> "🇧🇫" ],
    [ "name" => "Burundi", "flag"=> "🇧🇮" ],
    [ "name" => "Cabo Verde", "flag"=> "🇨🇻" ],
    [ "name" => "Cambodia", "flag"=> "🇰🇭" ],
    [ "name" => "Cameroon", "flag"=> "🇨🇲" ],
    [ "name" => "Canada", "flag"=> "🇨🇦" ],
    [ "name" => "Central African Republic", "flag"=> "🇨🇫" ],
    [ "name" => "Chad", "flag"=> "🇹🇩" ],
    [ "name" => "Chile", "flag"=> "🇨🇱" ],
    [ "name" => "China", "flag"=> "🇨🇳" ],
    [ "name" => "Colombia", "flag"=> "🇨🇴" ],
    [ "name" => "Comoros", "flag"=> "🇰🇲" ],
    [ "name" => "Congo, Democratic Republic of the", "flag"=> "🇨🇩" ],
    [ "name" => "Congo, Republic of the", "flag"=> "🇨🇬" ],
    [ "name" => "Costa Rica", "flag"=> "🇨🇷" ],
    [ "name" => "Croatia", "flag"=> "🇭🇷" ],
    [ "name" => "Cuba", "flag"=> "🇨🇺" ],
    [ "name" => "Cyprus", "flag"=> "🇨🇾" ],
    [ "name" => "Czechia", "flag"=> "🇨🇿" ],
    [ "name" => "Denmark", "flag"=> "🇩🇰" ],
    [ "name" => "Djibouti", "flag"=> "🇩🇯" ],
    [ "name" => "Dominica", "flag"=> "🇩🇲" ],
    [ "name" => "Dominican Republic", "flag"=> "🇩🇴" ],
    [ "name" => "Ecuador", "flag"=> "🇪🇨" ],
    [ "name" => "Egypt", "flag"=> "🇪🇬" ],
    [ "name" => "El Salvador", "flag"=> "🇸🇻" ],
    [ "name" => "Equatorial Guinea", "flag"=> "🇬🇶" ],
    [ "name" => "Eritrea", "flag"=> "🇪🇷" ],
    [ "name" => "Estonia", "flag"=> "🇪🇪" ],
    [ "name" => "Eswatini", "flag"=> "🇸🇿" ],
    [ "name" => "Ethiopia", "flag"=> "🇪🇹" ],
    [ "name" => "Fiji", "flag"=> "🇫🇯" ],
    [ "name" => "Finland", "flag"=> "🇫🇮" ],
    [ "name" => "France", "flag"=> "🇫🇷" ],
    [ "name" => "Gabon", "flag"=> "🇬🇦" ],
    [ "name" => "Gambia", "flag"=> "🇬🇲" ],
    [ "name" => "Georgia", "flag"=> "🇬🇪" ],
    [ "name" => "Germany", "flag"=> "🇩🇪" ],
    [ "name" => "Ghana", "flag"=> "🇬🇭" ],
    [ "name" => "Greece", "flag"=> "🇬🇷" ],
    [ "name" => "Grenada", "flag"=> "🇬🇩" ],
    [ "name" => "Guatemala", "flag"=> "🇬🇹" ],
    [ "name" => "Guinea", "flag"=> "🇬🇳" ],
    [ "name" => "Guinea-Bissau", "flag"=> "🇬🇼" ],
    [ "name" => "Guyana", "flag"=> "🇬🇾" ],
    [ "name" => "Haiti", "flag"=> "🇭🇹" ],
    [ "name" => "Honduras", "flag"=> "🇭🇳" ],
    [ "name" => "Hungary", "flag"=> "🇭🇺" ],
    [ "name" => "Iceland", "flag"=> "🇮🇸" ],
    [ "name" => "India", "flag"=> "🇮🇳" ],
    [ "name" => "Indonesia", "flag"=> "🇮🇩" ],
    [ "name" => "Iran", "flag"=> "🇮🇷" ],
    [ "name" => "Iraq", "flag"=> "🇮🇶" ],
    [ "name" => "Ireland", "flag"=> "🇮🇪" ],
    [ "name" => "Israel", "flag"=> "🇮🇱" ],
    [ "name" => "Italy", "flag"=> "🇮🇹" ],
    [ "name" => "Jamaica", "flag"=> "🇯🇲" ],
    [ "name" => "Japan", "flag"=> "🇯🇵" ],
    [ "name" => "Jordan", "flag"=> "🇯🇴" ],
    [ "name" => "Kazakhstan", "flag"=> "🇰🇿" ],
    [ "name" => "Kenya", "flag"=> "🇰🇪" ],
    [ "name" => "Kiribati", "flag"=> "🇰🇮" ],
    [ "name" => "Korea, North", "flag"=> "🇰🇵" ],
    [ "name" => "Korea, South", "flag"=> "🇰🇷" ],
    [ "name" => "Kosovo", "flag"=> "🇽🇰" ],
    [ "name" => "Kuwait", "flag"=> "🇰🇼" ],
    [ "name" => "Kyrgyzstan", "flag"=> "🇰🇬" ],
    [ "name" => "Laos", "flag"=> "🇱🇦" ],
    [ "name" => "Latvia", "flag"=> "🇱🇻" ],
    [ "name" => "Lebanon", "flag"=> "🇱🇧" ],
    [ "name" => "Lesotho", "flag"=> "🇱🇸" ],
    [ "name" => "Liberia", "flag"=> "🇱🇷" ],
    [ "name" => "Libya", "flag"=> "🇱🇾" ],
    [ "name" => "Liechtenstein", "flag"=> "🇱🇮" ],
    [ "name" => "Lithuania", "flag"=> "🇱🇹" ],
    [ "name" => "Luxembourg", "flag"=> "🇱🇺" ],
    [ "name" => "Madagascar", "flag"=> "🇲🇬" ]
      ]
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
    <form action="{{ route('apply.now') }}" method="POST" class="quote-style-two" id="apply_form" enctype='multipart/form-data' files="true">

    @if($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0 pl-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                <input class="form-control" id="first_name" name="first_name" placeholder="Your First and Middle Name" type="text" required>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="name">Last Name <span style="color:red">*</span></label>
                <input class="form-control" required id="last_name" name="last_name" placeholder="Your Last Name" type="text">
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="contact_mode">Preferred Contact Mode*<span style="color:red">*</span></label>
                <select class="dropwdown" id="contact_mode" name="contact_mode" required>
                        <option value="Email">Email</option>
                        <option value="Phone Call">Phone Call</option>
                        <option value="Text Message/SMS">Text Message/SMS</option>
                        <option value="WhatsApp">WhatsApp</option>
                        <option value="Video Call">Video Call</option>
                        <option value="In-Person Meeting">In-Person Meeting</option>
                        <option value="Chat App ">Chat App </option>
                        <option value="Social Media">Social Media</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="email">Email <span style="color:red">*</span></label>
                <input class="form-control" id="email" name="email" placeholder="Your Email" type="email" required>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group text-left">
              <label for="phone_number" class="phone">Phone <span style="color:red">*</span></label>
              <input type="tel" id="phone_number" name="phone_number" class="form-control w-100" style="" required />
          </div>

        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="have_whatsapp">Do you have a WhatsApp phone number? <span style="color:red">*</span></label>
                <select class="dropwdown" id="have_whatsapp" name="have_whatsapp" required>
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
            <label for="currently_working_country">Country You Are Currently Working<span style="color:red">*</span></label>
            <select class="dropwdown" id="currently_working_country" class="form-control select2 " name="currently_working_country" required>
                <option value="" >Select your country</option>
                @foreach ($countries as $country)

                    <option value="{{ $country['name'] ?? '' }}">
                        {{ $country['flag'] }} {{ $country['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group text-left">
            <label for="country_of_birth">Country of Birth <span style="color:red">*</span></label>
            <select class="dropwdown" id="country_of_birth" class="form-control select2 " name="country_of_birth" required>
                <option value="" disabled selected>Select your country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country['name'] ?? '' }}">
                    {{ $country['flag'] }}  {{ $country['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="date_of_birth">Date of Birth <span style="color:red">*</span></label>
                <input class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Your Email" type="date" required>
            </div>
        </div>
      </div>



      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="are_you_nurse">Are you currently working as a nurse?<span style="color:red">*</span></label>
                <select  class="dropwdown" id="are_you_nurse" name="are_you_nurse" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
              </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="years_of_experience">Years of Experience as an RN <span style="color:red">*</span></label>
                <select class="dropwdown" id="years_of_experience" name="years_of_experience" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
              </div>
        </div>
      </div>

<div class="row">
    <div class="col-lg-12">
        <div class="form-group text-left">
            <label for="country_of_education">Country Of Education<span style="color:red">*</span></label>
            <select class="dropwdown" id="country_of_education" class="form-control select2 " name="country_of_education" required>
                <option value="" disabled selected>Select your country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country['name'] ?? '' }}">
                        {{ $country['emoji'] ?? '' }} {{ $country['name']['common'] ?? $country['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="initial_education_program">What Initial Educational Programme Did You Complete To Become A Registered Nurse <span style="color:red">*</span></label>
                <select class="dropwdown" id="initial_education_program" name="initial_education_program" required>
                    <option value="adn">Select Your Programme</option>
                    <option value="adn">Associate Degree in Nursing (ADN)</option>
                    <option value="bsn">Bachelor of Science in Nursing (BSN)</option>
                    <option value="diploma">Diploma in Nursing</option>
                    <option value="absn">Accelerated BSN (ABSN)</option>
                    <option value="lpn-to-rn">LPN to RN Bridge Program</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="university_name">College/University Name <span style="color:red">*</span></label>
                <select class="dropwdown" id="university_name" name="university_name" required>
                    <option value="">Select Your University</option>
                    <option value="nuhs">National University of Health Sciences (Singapore)</option>
                    <option value="pgimer">Postgraduate Institute of Medical Education and Research (PGIMER), Chandigarh, India</option>
                    <option value="aims">All India Institute of Medical Sciences (AIIMS), New Delhi, India</option>
                    <option value="cu">Chulalongkorn University, Bangkok, Thailand</option>
                    <option value="cuhk">The Chinese University of Hong Kong (CUHK), Hong Kong</option>
                    <option value="um">University of Malaya, Kuala Lumpur, Malaysia</option>
                    <option value="hku">The University of Hong Kong (HKU), Hong Kong</option>
                    <option value="nus">National University of Singapore (NUS), Singapore</option>
                    <option value="bmu">B.P. Koirala Institute of Health Sciences, Dharan, Nepal</option>
                    <option value="tmc">Tianjin Medical University, Tianjin, China</option>
                </select>
              </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left">
                <label for="date_of_gratudation">Date of Graduation<span style="color:red">*</span></label>
                <input class="form-control" id="date_of_gratudation" name="date_of_graduation" placeholder="Your Email" type="date" required>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="form-group text-left check-qa">
                <label for="qualifications">Have you completed any additional postgraduate qualifications?<span style="color:red">*</span></label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]"  value="N/A" class="mb-1" >
                  <span>N/A</span>
                </label>
                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]"  value="MSN/MAN" class="mb-1" >
                  <span>MSN/MAN</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]"  value="Registered Midwife" class="mb-1" >
                  <span>Registered Midwife</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="ICU" class="mb-1" >
                  <span>ICU</span>
                </label>

                <label class="custom-checkbox">
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="CCU" class="mb-1" >
                  <span>CCU</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="Renal/Urology" class="mb-1" >
                  <span>Renal/Urology</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="Psychiatry" class="mb-1" >
                  <span>Psychiatry</span>
                </label>


                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="Pediatric" class="mb-1" >
                  <span>Pediatric</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="Anasthesia" class="mb-1" >
                  <span>Anasthesia</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="KRN" class="mb-1" >
                  <span>KRN</span>
                </label>

                <label class="custom-checkbox" >
                  <input type="checkbox" id="qualifications[]" name="qualifications[]" value="KRCHN" class="mb-1" >
                  <span>KRCHN</span>
                </label>

            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="specialities">Specialities <span style="color:red">*</span></label>
                      <select class="dropwdown" id="specialities" required name="specialities">
                            <option value="">Select Your Speciality</option>
                            <option value="pediatric-nursing">Pediatric Nursing</option>
                            <option value="critical-care-nursing">Critical Care Nursing</option>
                            <option value="surgical-nursing">Surgical Nursing</option>
                            <option value="oncology-nursing">Oncology Nursing</option>
                            <option value="psychiatric-nursing">Psychiatric/Mental Health Nursing</option>
                            <option value="emergency-nursing">Emergency/Trauma Nursing</option>
                            <option value="neonatal-nursing">Neonatal Nursing</option>
                            <option value="geriatric-nursing">Geriatric Nursing</option>
                            <option value="cardiac-nursing">Cardiac Nursing</option>
                            <option value="community-health-nursing">Community Health Nursing</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="english_proficiency_test">Have you taken an English Proficiency exam (IELTS, OET, TOEFL, PTE, MET, etc.)? <span style="color:red">*</span></label>
                      <select class="dropwdown" id="english_proficiency_test" required name="english_proficiency_test">
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="is_pass_CGFNS">Have you taken and passed the CGFNS Certification Program? <span style="color:red">*</span></label>
                      <select class="dropwdown" id="is_pass_CGFNS" required name="is_pass_CGFNS">
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="is_pass_NCLEX">Have you passed the NCLEX exam? <span style="color:red">*</span></label>
                      <select class="dropwdown" id="is_pass_NCLEX"required name="is_pass_NCLEX">
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="hear_about_us">How did you hear about us? <span style="color:red">*</span></label>
                      <select class="dropwdown" id="hear_about_us" required name="hear_about_us">
                            <option value="social-media">Social Media (e.g., Facebook, Instagram)</option>
                            <option value="search-engine">Search Engine (e.g., Google, Bing)</option>
                            <option value="friend-family">Friends or Family Recommendation</option>
                            <option value="email-newsletter">Email Newsletter</option>
                            <option value="advertisement">Online Advertisement</option>
                            <option value="event-seminar">Event or Seminar</option>
                            <option value="news-article">News Article or Blog</option>
                            <option value="other">Other</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <div class="form-group text-left">
                      <label for="resume">Resume/CV <span style="color:red">*</span></label>
                      <input class="form-control" required id="resume" name="resume" placeholder="Your Email" type="file">
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
                    <a href="/privacy-policy" class="privacy-link">Applicant and Prospective Employer Privacy Policy</a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left check-qa">

                      <label class="custom-checkbox" >
                      <input type="checkbox" required id="has_checked_privacy_statement" name="has_checked_privacy_statement"  value="1" class="mb-0"  >
                        <span> I have read and understand the Equal
                        Opportunities and Privacy Statements <text style="color:red">*</text>
                        </span>
                      </label>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left ">
                        <label for="name" style="line-height:20px;">Please type your name here to certify that all the information on this form is true and correct. <span style="color:red">*</span></label>
                        <input class="form-control" required id="signature_name" name="signature_name" placeholder="" type="text">
                    </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0" style="line-height:20px;font-weight:300">
                          <b>Karini</b>Step is committed to protecting and respecting your privacy, and we’ll only use your personal information
                           to administer your account and to provide the products and services you requested from us. 
                        </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left check-qa">

                      <label class="custom-checkbox" >
                        <input type="checkbox" required id="has_checked_recieve_application_updates" name="has_checked_recieve_application_updates"  value="1" class="mb-0" >
                        <span> I agree to receive application updates from
                        KariniStep <text style="color:red">*</text>
                        </span>
                      </label>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0" style="line-height:20px;">
                          You may unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices,
                          and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.
                        </p>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group text-left">
                        <p class="text-sm text-primary mb-0" style="line-height:20px;">
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

@section('js')
@if(isset($clearLocalStorage) && $clearLocalStorage)
<script>
    localStorage.clear();
</script>
@endif
<script>
    $(document).ready(function(){
        console.log("ready");

        // Existing code for inputs
        $('#apply_form input').each(function() {
            var name = $(this).attr("name");
            var val = localStorage.getItem(name);
            if (val && $(this).attr("type") != "file") {
                $(this).val(val);
            }
        });


        $('#apply_form input').on('focusout', function(e) {
            var name = $(this).attr("name");
            localStorage.setItem(name, e.target.value);
        });

        $('select').each(function() {
// Remove any display: none; property
            $(this).css('display', '');
            $(this).css({
                'position': 'absolute',
                'left': '-9999px'
            });
        });
    });
</script>
@endsection
