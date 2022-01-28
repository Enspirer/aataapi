@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/index.css') }}" />
<link rel="stylesheet" href="{{ url('css/style.css') }}" />
<link rel="stylesheet" href="{{ url('achi/css/main.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush 

@section('content')

<section class="section-about">
  <div class="container">
    <div class="row">
      <div class="about-title">
        <h2>About that Project</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 px-4">
        <p>
          We are going to start a center for mindfulness and relaxation in the
          region of Ruwanwella in Kegalle district – Sri Lanka. Our aim is to
          train children, youths and elders for their mindfulness and
          relaxation. We give practical instructions to make their life peaceful
          and happy.
        </p>
        <p>
          Despite the development of physical technology in the modern world,
          the human mind is corrupted in every aspect. There are more and more
          physical and mental problems, anxiety, and depression, conflicts and
          crimes arise in the society. There is no peace in the world without
          the peace in the minds of the human beings. Understanding this reality
          we decided to start this kind of actual programme to train our people.
        </p>
        <p>
          The place is surrounded by mountains and the site is situated in a
          forest. Cool and calm environment of this place will support to relax
          and concentration. We want to build big wooden type meditation hall
          and 20 rooms with attached bathrooms for the usage of practitioners.
          Here by I will attach the plan of buildings. Without damaging the
          forest we are going to build this center for the benefit of our
          generation.
        </p>
      </div>
      <div class="col-md-5">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          alt="about-image"
        />
      </div>
    </div>
  </div>
</section>

<section class="section-donation">
  <div class="container">
    <div class="donation-content">
    <div class="row">
      <h2>THE DONATIONS CAN SEND TO THE BANK ACCOUNT GIVEN BELOW.</h2>
      <div class="col-lg-4 mobile-hide">
        <img
          class="art-left"
          src="{{ url('achi/images/donation-art-left.png') }}"
          alt=""
        />
      </div>
      <div class="col-lg-4">
        <div class="content">
          <span class="title">- Full Name -</span>
          <span class="info">Ven.Lenagala Siriniwasa Thero</span>
          <span class="title">- Account Number -</span>
          <span class="info accNo">1005 5026 5456</span>
          <span class="title">SAMPATH BANK , Kiribathgoda Branch</span>
          <span class="light-text">Branch code - 005</span>
          <span class="light-text">Swift code - BSAMLKLX</span>
        </div>
      </div>
      <div class="col-lg-4 mobile-hide">
        <img
          class="art-right"
          src="{{ url('achi/images/donation-art-right.png') }}"
          alt=""
        />
      </div>
    </div>
    </div>
  </div>
</section>

<section class="section-masonry">
    <div class="container">
        <h2>Topic Here For Images</h2>
        <div class="grid">
            <div class="grid-item">
                <img src="{{ url('achi/images/20210505_142009.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/IMG-20210718-WA0022.png') }}" alt="">
            </div>
            <div class="grid-item ">
                <img src="{{ url('achi/images/IMG-20210718-WA0033.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/IMG-20210828-WA0019.png') }}" alt="">
            </div>
            <div class="grid-item">
                <img src="{{ url('achi/images/statue with pond.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/IMG-20210628-WA0037.png') }}" alt="">
            </div>
            <div class="grid-item ">
                <img src="{{ url('achi/images/IMG-20210718-WA0033.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/20210505_142009.png') }}" alt="">
            </div>
            <div class="grid-item">
                <img src="{{ url('achi/images/IMG-20210828-WA0019.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/IMG-20210718-WA0022.png') }}" alt="">
            </div>
            <div class="grid-item ">
                <img src="{{ url('achi/images/IMG-20210628-WA0037.png') }}" alt="">
            </div>
            <div class="grid-item grid-item--width2">
                <img src="{{ url('achi/images/statue with pond.png') }}" alt="">
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

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 1
    });
</script>
@endpush