@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
@endpush


@section('content')

@include('frontend.includes.slider')

<section class="section-latest">
    <div class="container mobile-container">
        <h2 style="text-align:center;margin-bottom: 45px;">Latest at <span class="highlighted-title">AATHAPI</span></h2>
        <div class="row align-items-center full-card">
            <div class="col-md-6 col-xs-12 padding-fix">
                <img class="large-img" src="{{ url('img/frontend/home/hill.png') }}" alt="hill">
            </div>
            <div class="col-md-6 col-xs-12 txt-padding-fix">
                <h3>Sample Title Here</h3>
                <p class="date">02<sup>nd</sup> January 2022</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="links" href="">Read More<i class="btn-icon fas fa-arrow-right"></i></a>
                <div class="slider-nav">
                    <a href=""><img src="{{ url('img/frontend/home/left.png') }}" alt=""
                            style="width:25px; margin-right:10px;"></a>
                    <a href=""><img src="{{ url('img/frontend/home/right.png') }}" alt="" style="width:25px;"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-facebook">
    <div class="container">
        <div class="row">
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
    <div class="fb-page" data-href="https://www.facebook.com/AngulimalaSeya" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AngulimalaSeya" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AngulimalaSeya">Sri Angulimala Maha Se Viharaya</a></blockquote></div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

<div class="section-cards">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

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