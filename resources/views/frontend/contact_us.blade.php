@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/index.css') }}" />
<link rel="stylesheet" href="{{ url('css/style.css') }}" />
<link rel="stylesheet" href="{{ url('achi/css/main.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush 

@section('content')

<section class="section-map">
  <div class="container">
    <div class="row">
      <div class="contact-title">
        <span>Contact Us</span>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253423.45648091627!2d79.95571502512942!3d7.0396355866018006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae305aec567ecbd%3A0x46125b56906086cf!2sLewangama%20Sadanandarama%20Purana%20Tampita%20Viharaya!5e0!3m2!1sen!2slk!4v1643088951619!5m2!1sen!2slk"
      width="100%"
      height="600"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    ></iframe>
  </div>
</section>
<section class="section-form">
  <div class="container">
    <div class="row">
      <div class="text-block">
        <h2>Let Us Call You!</h2>
        <p>
          Let us know if you have any questions about our activities or how you
          can get involved. We try to respond within 24 hours. Remember…
        </p>
        <ol>
          <li>All our activities are open to the public</li>
          <li>All our activities are free</li>
          <li>People of all ages are welcome</li>
        </ol>
      </div>
      <div class="contact-form">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="inputName" />
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="inputEmail" />
          </div>
          <div class="col-md-6">
            <label for="inputPhone" class="form-label">Your Number</label>
            <input type="tel" class="form-control" id="inputPhone" />
          </div>
          <div class="col-md-6">
            <label for="inputMessage" class="form-label">Message</label>
            <textarea
              class="form-control"
              id="inputMessage"
              rows="2"
            ></textarea>
          </div>
          <div class="col-md-6">
            <div class="form-check">
              <!-- <label>Consent</label> -->
              <input class="form-check-input" type="checkbox" id="gridCheck" />
              <label class="form-check-label" for="gridCheck">
                Acceptance * <br />
                I would like to receive information & updates from Trace
                Solutions in relation to my enquiry. I understand that Trace
                will never share my information.
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="contact-info">
  <div class="container">
    <div class="row">
      <div class="display-1">Contact Info</div>
      <p>
        SRI SADANANDARAMA MAHA PIRIVENA,<br />
        TALAWATHTHA, LEWANGAMA,<br />
        RUWANWELLA
      </p>
      <span>Phone: <a href="tel:+94777899503">+94 777 8 99 503</a></span>
      <span
        >Email:
        <a href="mailto:siriniwasal@yahoo.com">siriniwasal@yahoo.com</a></span
      >
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
<script src="{{ url('achi/js/contactUs.js') }}"></script>

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
