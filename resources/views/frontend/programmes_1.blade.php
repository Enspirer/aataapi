@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('achi/css/main.css') }}" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
@endpush


@section('content')

<section class="section-imageBlock">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <img class="programme-image"
          src="https://dummyimage.com/1200x600/000/fff"
          alt="program-image"
        />
      </div>
      <div class="col-md-4">
        <div class="programme-details">
        <div class="card">
          <div class="card-body">
            <i class="bi bi-three-dots"></i>
            <span class="programme-label">Start Date</span>
            <div class="programme-data">02nd January 2022</div>
            <span class="programme-label">Course Type</span>
            <div class="programme-data">Children / Teens</div>
            <span class="programme-label">Status</span>
            <div class="programme-data">
              <span class="programme-status-open">Open to Apply</span>
            </div>
            <span class="programme-label">Duration</span>
            <div class="programme-data">6 Days</div>
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's
            </p>
          </div>
          <div class="card-footer">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-primary btn-register"
              data-bs-toggle="modal"
              data-bs-target="#registrationModal"
            >
              Register Now
            </button>

            <!-- Modal -->
            <div
              class="modal fade registraion-modal"
              id="registrationModal"
              tabindex="-1"
              aria-labelledby="registrationModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog">
                <div class="registration-modal-content">
                      
                      <div class="form-download">
                        <span>
                        <i class="bi bi-file-earmark-pdf"></i>
                        </span>
                        <span>Download Form</span>
                      </div>
                      
                      
                      <div class="online-registration">
                        <img src="{{url('achi/icons/online registration.svg')}}" alt="Online Registration Icon">
                        <span>Online Registration</span>
                      </div>
                      
                  </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-programme-description">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Dhammanupassana (Mindfulness of Phenomena or Dharma)</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
          electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
          and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
          </p>
      </div>
    </div>
  </div>
</section>

<section class="section-programmeSchedule">
  <div class="container">
    <div class="shedule-content">
    <div class="row">
      <h2>Approximate Program Schedule :</h2>
    </div>
    <div class="row">
      <div class="col-md-6 border-right">
        <table class="programmeTable table-borderless">
          <thead>
            <tr>
              <th class="table-title">Time</th>
              <th class="table-title">Item</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <table class="programmeTable">
          <thead>
            <tr>
              <th class="table-title mobile-hide">Time</th>
              <th class="table-title mobile-hide">Item</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <td>Larry</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</section>

@endsection

@push('after-scripts')
     <!-- Swiper JS -->
     <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="PwqAE7u1"></script>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
@endpush