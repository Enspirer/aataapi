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

<section class="section-popupImage">
  <div class="container">
    <img
      src="{{ url('achi/images/Meditation-Sri-Lanka-Monk-Buddhist-Monk-Buddhism-5311144.png') }}"
      alt="popup-image"
    />
    <div class="text-block">
      <div class="content">
        <h2>About the <span class="display-4">Meditation</span></h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section-guidedMeditation">
  <div class="container">
    <h2>Guided Meditations</h2>
    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-5">
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img
            src="{{url('achi/images/20210505_142009.png')}}"
            class="card-img-top"
            alt="gallery-thumbnail"
          />
          <div class="card-body">
            <h5 class="card-title">Title of the photo collection</h5>
            <span class="card-date">02nd January 2022</span>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque deleniti sed dolor molestiae aut vero harum voluptatem expedita possimus alias natus, odit recusandae est sit quas ullam minus deserunt assumenda, quaerat id, excepturi ad illum animi? Autem temporibus natus doloribus!</p>
          </div>
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

    $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 1
    });

    </script>
@endpush