@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/index.css') }}" />
<link rel="stylesheet" href="{{ url('css/style.css') }}" />
<link rel="stylesheet" href="{{ url('achi/css/main.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush 

@section('content')

<section class="section-masonry">
    <div class="container">
        <p>02nd January 2022</p>
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