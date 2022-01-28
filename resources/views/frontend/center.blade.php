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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'><link rel="stylesheet" href="./style.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

@endpush


@section('content')

<!-- <section class="below-banner-section">
  <div class="container">
    <!-- desktop design 
    <div class="inner-container-home-first hidden-xs">
      <img
        class="home-first-img col-xs-12"
        src="{{ url('img/frontend/home/home-first.png') }}"
        alt=""
      />
      <div class="home-first-card col-xs-12">
        <h2 class="light-title">
          <span class="small-title">About the </span>Center
        </h2>
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

    <!-- mobile design 
    <div class="inner-container-home-first visible-xs">
      <img
        class="home-first-img col-xs-12"
        src="{{ url('img/frontend/home/home-first.png') }}"
        alt=""
      />
      <div class="home-mobile-first-card col-xs-12">
        <h2 class="light-title">
          <span class="small-title">About the </span>Center
        </h2>
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
</section> -->

<section class="section-popupImage">
  <div class="container">
    <img
      src="{{ url('img/frontend/home/home-first.png') }}"
      alt="popup-image"
    />
    <div class="text-block">
      <div class="content">
        <h2>About the <span class="display-4">Center</span></h2>
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

<section id="story">
  <div class="container-fluid full-width-container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12">
          <img
            class="side-img"
            src="{{ url('img/frontend/home/bo-leaf.png') }}"
            alt=""
          />
        </div>

        <div class="col-md-6 col-xs-12 col-sm-12">
          <div class="txt-wrapper">
            <h2 style="color: #fff">The Story</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Egestas fringilla phasellus faucibus scelerisque eleifend donec
              pretium. Viverra accumsan in nisl nisi scelerisque. Nec feugiat
              nisl pretium fusce id velit ut tortor. Nibh tellus molestie nunc
              non blandit. Elit at imperdiet dui accumsan sit amet nulla.
              Faucibus in ornare quam viverra orci sagittis eu volutpat.
              Pharetra convallis posuere morbi leo urna molestie at elementum. A
              scelerisque purus semper eget.
            </p>
            <p>
              Et netus et malesuada fames ac. Egestas tellus rutrum tellus
              pellentesque eu tincidunt. Ac orci phasellus egestas tellus rutrum
              tellus pellentesque. Dictum at tempor commodo ullamcorper a lacus
              vestibulum sed arcu. Nibh venenatis cras sed felis eget velit
              aliquet. Sem et tortor consequat id porta nibh venenatis cras sed.
              Proin nibh nisl condimentum id venenatis a condimentum. Cursus
              turpis massa tincidunt dui ut ornare lectus sit amet. Viverra
              maecenas accumsan lacus vel facilisis volutpat est velit egestas.
            </p>

            <a class="simple-links" href=""
              >View more images
              <i style="margin-left: 5px" class="fas fa-arrow-right"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="img-row">
          <img
            class="img-row-image"
            src="{{ url('img/frontend/home/part-1.png') }}"
            alt=""
          />
          <img
            class="img-row-image"
            src="{{ url('img/frontend/home/part-2.png') }}"
            alt=""
          />
          <img
            class="img-row-image"
            src="{{ url('img/frontend/home/part-3.png') }}"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section-location">
  <div class="container">
      <img
        class="home-first-img col-xs-12"
        src="{{ url('achi/images/IMG-20210718-WA0033.png') }}"
        alt=""
      />
      <div class="text-block">
        <div class="content">
          <h2 class="light-title">
            <span class="small-title">Location of the </span>Center
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse.
          </p>
          <div class="button">
            <a href="#">Visit Place on Google Map</a>
          </div>
        </div>
      </div>
  </div>
</section>


<section class="section-slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12 heroSlider-fixed">
        <!-- Slider -->
        <div class="slider responsive">
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
          <div>
            <img src="{{ url('achi/images/20210505_142009.png') }}" alt="" />
          </div>
        </div>
        <!-- control arrows -->
        <div class="prev">
          <span
            aria-hidden="true"
          ><i class="bi bi-chevron-left"></i></span>
        </div>
        <div class="next">
          <span
            aria-hidden="true"
          ><i class="bi bi-chevron-right"></i></span>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@push('after-scripts')
     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="{{ url('achi/js/center.js') }}"></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>

     <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      // Slider

      $(".responsive").slick({
    dots: false,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ],
});
    </script>
@endpush