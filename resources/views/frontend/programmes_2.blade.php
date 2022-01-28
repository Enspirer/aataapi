@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/index.css') }}" />
<link rel="stylesheet" href="{{ url('css/style.css') }}" />
<link rel="stylesheet" href="{{ url('achi/css/main.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush 

@section('content')

<section class="section-registrationForm">
  <div class="container">
    <ul class="nav nav-pills mb-3" id="registration-pills" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link pill-button active"
          id="registration-pill-1"
          data-bs-toggle="pill"
          data-bs-target="#registration-option-1"
          type="button"
          role="tab"
          aria-controls="registration-option-1"
          aria-selected="true"
        >
          Registration form - English
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link pill-button"
          id="registration-pill-2"
          data-bs-toggle="pill"
          data-bs-target="#registration-option-2"
          type="button"
          role="tab"
          aria-controls="registration-option-2"
          aria-selected="false"
        >
          Registration form - Sinhala
        </button>
      </li>
    </ul>
    <div class="tab-content" id="registration-pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="registration-option-1"
        role="tabpanel"
        aria-labelledby="registration-pill-1"
      >
        <div class="pill-content">
          <h2>Online Registration</h2>
          <div class="row">
            <div class="col-md-8">
              <form class="row g-3">
                <div class="col-12">
                  <span class="subtitile">Personal Information</span>
                </div>
                <div class="col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="firstName" />
                </div>
                <div class="col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="lastName" />
                </div>
                <div class="col-md-6">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" />
                </div>
                <div class="col-md-6">
                  <span class="custom-label">Gender</span>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio1"
                      value="option1"
                    />
                    <label class="form-check-label" for="inlineRadio1"
                      >Male</label
                    >
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio2"
                      value="option2"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                      >Female</label
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="TpNumber" class="form-label"
                    >Telephone Number</label
                  >
                  <input type="tel" class="form-control" id="TpNumber" />
                </div>
                <div class="col-md-6">
                  <label for="age" class="form-label">Age</label>
                  <input type="number" class="form-control" id="age" />
                </div>
                <div class="col-md-6">
                  <label for="job" class="form-label">Your Job</label>
                  <input type="text" class="form-control" id="job" />
                </div>
                <div class="col-md-6">
                  <span class="custom-label">Programme Name</span>
                  <select
                    class="form-select"
                    aria-label="Default select example"
                  >
                    <option value="0"></option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="illnesses" class="form-label"
                    >Details about special illnesses if you have</label
                  >
                  <textarea
                    class="form-control"
                    id="illnesses"
                    rows="1"
                  ></textarea>
                </div>
                <div class="col-12">
                  <span class="subtitile">Guardian Information</span>
                </div>
                <div class="col-md-6">
                  <label for="firstNameGuardian" class="form-label"
                    >First Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="firstNameGuardian"
                  />
                </div>
                <div class="col-md-6">
                  <label for="lastNameGuardian" class="form-label"
                    >Last Name</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="lastNameGuardian"
                  />
                </div>
                <div class="col-md-6">
                  <label for="addressGuardian" class="form-label"
                    >Address</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="addressGuardian"
                  />
                </div>
                <div class="col-md-6">
                  <span class="custom-label">Gender</span>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio1"
                      value="option1"
                    />
                    <label class="form-check-label" for="inlineRadio1"
                      >Male</label
                    >
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="inlineRadioOptions"
                      id="inlineRadio2"
                      value="option2"
                    />
                    <label class="form-check-label" for="inlineRadio2"
                      >Female</label
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="TpNumberGuardian" class="form-label"
                    >Telephone Number</label
                  >
                  <input
                    type="tel"
                    class="form-control"
                    id="TpNumberGuardian"
                  />
                </div>
                <div class="col-12">
                  <label for="emergencyPerson" class="form-label"
                    >Name of the person to be notified in the event of an
                    emergency.</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="emergencyPerson"
                  />
                </div>
                <div class="col-12">
                  <p class="registration-agreement">
                    I sincerely promise that all the above information is true
                    and correct, that I will not harm the honor of the venerable
                    monks, monks and nuns during the week of residence, and that
                    I will abide by the rules and schedule
                  </p>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    Register Now
                  </button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <img
                class="registration-image"
                src="{{url('achi/images/Meditation-Sri-Lanka-Monk-Buddhist-Monk-Buddhism-5311144.png')}}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="registration-option-2"
        role="tabpanel"
        aria-labelledby="registration-pill-2"
      >
      <div id="sinhala-lang" class="pill-content">
        <h2>Online Registration</h2>
        <div class="row">
          <div class="col-md-8">
            <form class="row g-3">
              <div class="col-12">
                <span class="subtitile">පෞද්ගලික තොරතුරු</span>
              </div>
              <div class="col-md-6">
                <label for="firstNameSinhala" class="form-label">පළමු නම</label>
                <input type="text" class="form-control" id="firstNameSinhala" />
              </div>
              <div class="col-md-6">
                <label for="lastNameSinhala" class="form-label">අවසාන නම</label>
                <input type="text" class="form-control" id="lastNameSinhala" />
              </div>
              <div class="col-md-6">
                <label for="addressSinhala" class="form-label">ලිපිනය</label>
                <input type="text" class="form-control" id="addressSinhala" />
              </div>
              <div class="col-md-6">
                <span class="custom-label">ස්ත්‍රී පුරුෂ භාවය</span>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptionsSinhala"
                    id="inlineRadio1Sinhala"
                    value="option1Sinhala"
                  />
                  <label class="form-check-label" for="inlineRadio1Sinhala"
                    >ගැහැණු</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptionsSinhala"
                    id="inlineRadio2Sinhala"
                    value="option2Sinhala"
                  />
                  <label class="form-check-label" for="inlineRadio2Sinhala"
                    >පිරිමි</label
                  >
                </div>
              </div>
              <div class="col-md-6">
                <label for="TpNumberSinhala" class="form-label"
                  >දුරකථන අංකය</label
                >
                <input type="tel" class="form-control" id="TpNumberSinhala" />
              </div>
              <div class="col-md-6">
                <label for="ageSinhala" class="form-label">වයස</label>
                <input type="number" class="form-control" id="ageSinhala" />
              </div>
              <div class="col-md-6">
                <label for="jobSinhala" class="form-label">රැකියාව</label>
                <input type="text" class="form-control" id="jobSinhala" />
              </div>
              <div class="col-md-6">
                <span class="custom-label">ඔබ සම්බන්ධ වීමට බලාපොරොත්තු වන වැඩසටහන</span>
                <select
                  class="form-select"
                  aria-label="Default select example"
                >
                  <option value="0"></option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-12">
                <label for="illnessesSinhala" class="form-label"
                  >විශේෂ අසනීප ඇත්නම් ඒ පිළිබද විස්තර</label>
                <textarea
                  class="form-control"
                  id="illnessesSinhala"
                  rows="1"
                ></textarea>
              </div>
              <div class="col-12">
                <span class="subtitile">භාරකරු පිළිබද විස්තර</span>
              </div>
              <div class="col-md-6">
                <label for="firstNameGuardianSinhala" class="form-label"
                  >පළමු නම</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="firstNameGuardianSinhala"
                />
              </div>
              <div class="col-md-6">
                <label for="lastNameGuardianSinhala" class="form-label"
                  >අවසාන නම</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="lastNameGuardianSinhala"
                />
              </div>
              <div class="col-md-6">
                <label for="addressGuardianSinhala" class="form-label"
                  >ලිපිනය</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="addressGuardianSinhala"
                />
              </div>
              <div class="col-md-6">
                <span class="custom-label">ස්ත්‍රී පුරුෂ භාවය</span>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptionsSinhala"
                    id="inlineRadio1Sinhala"
                    value="option1Sinhala"
                  />
                  <label class="form-check-label" for="inlineRadio1Sinhala"
                    >ගැහැණු</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="inlineRadioOptionsSinhala"
                    id="inlineRadio2Sinhala"
                    value="option2Sinhala"
                  />
                  <label class="form-check-label" for="inlineRadio2Sinhala"
                    >පිරිමි</label
                  >
                </div>
              </div>
              <div class="col-md-6">
                <label for="TpNumberGuardianSinhala" class="form-label"
                  >දුරකථන අංකය</label
                >
                <input
                  type="tel"
                  class="form-control"
                  id="TpNumberGuardianSinhala"
                />
              </div>
              <div class="col-12">
                <label for="emergencyPersonSinhala" class="form-label"
                  >හදිසි අවස්ථාවකදී දැනුම් දිය යුතු පුද්ගලයාගේ නම හා දුරකථන අංකය</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="emergencyPersonSinhala"
                />
              </div>
              <div class="col-12">
                <p class="registration-agreement">
                    ඉහත සදහන් සියලු තොරතුරු සත්‍ය හා නිවැරදි වන බවටත්, නේවාසිකව සිටින සතිය තුළදී ගෞරවනීය ස්වාමීන්වහන්සේලාගේත්, අසපුවේත්, මෑණියන් වහන්සේලාගේත් ගෞරවයට හානියක් නොවන පරිදි කටයුතු කරන බවටත්, භාවනා යෝගීන් සදහා ඇති නීතිරීති හා කාලසටහනට අනුකූලව කටයුතු කරන බවටත් අවංකවම පොරොන්දු වෙමි.              
                </p>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">
                  Register Now
                </button>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <img
              class="registration-image"
              src="{{url('achi/images/Meditation-Sri-Lanka-Monk-Buddhist-Monk-Buddhism-5311144.png')}}"
              alt=""
            />
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>


@endsection 

@push('after-scripts')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ url('achi/js/aboutUs.js') }}"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.mySwiper', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
@endpush