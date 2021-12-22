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

<section id="home-banner">
      <!-- Swiper -->
      <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ url('img/frontend/home/Hero.png') }}" alt="first-banner">
                    <div class="banner-txt-wrapper">
                    <h1>AATAAPI</h1>
                    <h4 class="title-description" style="font-weight:300;">Center for Mindfulness & Relaxation</h4>
                    </div>
                    <div class="logo-wrapper">
                        <img class="logo" src="{{ url('img/frontend/logo.png') }}" alt="logo">
                    </div>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
                </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    <!-- <div class="banner-txt-wrapper">
        <h1>AATAAPI</h1>
        <h4 style="font-weight:300;">Center for Mindfulness & Relaxation</h4>
    </div>
    <div class="logo-wrapper">
        <img class="logo" src="{{ url('img/frontend/logo.png') }}" alt="logo">
    </div> -->
</section>
</div> 
<!-- end of container fluid -->

<div class="container-fluid below-banner-all full-width-container-fluid">
<a class="donate-link" href="#" data-toggle="modal" data-target="#donate">
    <img class="sonar-wave" width="80px" src="{{ url('img/frontend/donate-logo.png') }}" alt="donate logo">
    <div style="width:80px; height:80px; background:#FFCC00;border-radius:50%; position: absolute; top: 30px; right: 30px;z-index:-1" class="round-shape"></div>
</a>



<section class="below-banner-section">
    <div class="container">
        <!-- desktop design -->
        <div class="inner-container-home-first hidden-xs">
            <img class="home-first-img col-xs-12" src="{{ url('img/frontend/home/home-first.png') }}" alt=""> 
            <div class="home-first-card col-xs-12">
                <h2 class="light-title"><span class="small-title">About the </span>Center</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
            </div>
        </div>

        <!-- mobile design -->
        <div class="inner-container-home-first visible-xs">
            <img class="home-first-img col-xs-12" src="{{ url('img/frontend/home/home-first.png') }}" alt="">
            <div class="home-mobile-first-card col-xs-12">
                <h2 class="light-title"><span class="small-title">About the </span>Center</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
            </div>
        </div>



    </div>
 
     


</section>
<section id="story">
    <div class="container-fluid full-width-container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-12">
                    <img class="side-img" src="{{ url('img/frontend/home/bo-leaf.png') }}" alt="">
                </div>

                <div class="col-md-6 col-xs-12 col-sm-12">
                    <div class="txt-wrapper">
                        <h2 style="color:#fff;">The Story</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Egestas fringilla phasellus faucibus scelerisque eleifend
                            donec pretium. Viverra accumsan in nisl nisi scelerisque. Nec feugiat nisl pretium fusce id
                            velit ut tortor. Nibh tellus molestie nunc non blandit. Elit at imperdiet dui accumsan sit
                            amet nulla. Faucibus in ornare quam viverra orci sagittis eu volutpat. Pharetra convallis
                            posuere morbi leo urna molestie at elementum. A scelerisque purus semper eget.</p>
                        <p>Et netus et malesuada fames ac. Egestas tellus rutrum tellus pellentesque eu tincidunt. Ac
                            orci phasellus egestas tellus rutrum tellus pellentesque. Dictum at tempor commodo
                            ullamcorper a lacus vestibulum sed arcu. Nibh venenatis cras sed felis eget velit aliquet.
                            Sem et tortor consequat id porta nibh venenatis cras sed. Proin nibh nisl condimentum id
                            venenatis a condimentum. Cursus turpis massa tincidunt dui ut ornare lectus sit amet.
                            Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas.</p>

                        <a class="simple-links" href="">View more images <i style="margin-left:5px;"
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="img-row">
                    <img class="img-row-image" src="{{ url('img/frontend/home/part-1.png') }}" alt="">
                    <img class="img-row-image" src="{{ url('img/frontend/home/part-2.png') }}" alt="">
                    <img class="img-row-image" src="{{ url('img/frontend/home/part-3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="program-slider">
    <img style="text-align: center;display:block; margin-left:auto;margin-right:auto; width:100%;"
        src="{{ url('img/frontend/home/topic-here.png') }}">
</section>
<section>
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


<section>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-xs-12">
                <div class="card">
                    <img src="{{ url('img/frontend/home/card1.png') }}" alt="event-one" style="width:100%">
                    <div class="container">
                        <h3>SAMPLE TITLE HERE</h3>
                        <p class="date">02<sup>nd</sup> January 2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="card">
                    <img src="{{ url('img/frontend/home/card2.png') }}" alt="event-two" style="width:100%">
                    <div class="container">
                        <h3>SAMPLE TITLE HERE</h3>
                        <p class="date">02<sup>nd</sup> January 2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="card">
                    <img src="{{ url('img/frontend/home/card3.png') }}" alt="event-three" style="width:100%">
                    <div class="container">
                        <h3>SAMPLE TITLE HERE</h3>
                        <p class="date">02<sup>nd</sup> January 2022</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
@endsection

@push('after-scripts')
     <!-- Swiper JS -->
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

