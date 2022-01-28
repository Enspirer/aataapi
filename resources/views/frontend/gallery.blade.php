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
@endpush


@section('content')

<section class="section-gallery">
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          class="card-img-top"
          alt="gallery-thumbnail"
        />
        <div class="card-body">
          <h5 class="card-title">Title of the photo collection</h5>
          <p class="card-text">02nd January 2022</p>
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
     <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

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

