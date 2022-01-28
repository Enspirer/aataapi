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

<section class="section-meditationMethod">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-6">
              <div class="image-block">
                <img
                  src="{{ url('achi/images/Meditation-Sri-Lanka-Monk-Buddhist-Monk-Buddhism-5311144.png') }}"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-block">
                <h2 class="sinhala-title">01 ffu;%S Ndjkdj</h2>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard dummy text ever since the 1500s, when an unknown
                  printer took a galley of type and scrambled it to make a type
                  specimen book.
                </p>
                <p>
                  t has survived not only five centuries, but also the leap into
                  electronic typesetting, remaining essentially unchanged. It
                  was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently with
                  desktop publishing software like Aldus PageMaker including
                  versions of Lorem Ipsum
                </p>
                <p>
                  Lorem Ipsum is simply dummy text of the printing and
                  typesetting industry. Lorem Ipsum has been the industry's
                  standard
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book. dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book.
              </p>
              <p>
                It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets
                containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of
                Lorem Ipsum
              </p>
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