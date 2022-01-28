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

<section class="section-sinhalaProgrammeBlock">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img
                src="{{url('achi/images/IMG-20210628-WA0037.png')}}"
                class="img-fluid rounded-start"
                alt=""
              />
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <div class="controller">
                  <span><a href="#"><i class="bi bi-chevron-left"></i></a></span>
                  <span><a href="#"><i class="bi bi-chevron-right"></i></a></span>
                </div>
                <h1 class="programme-title">Wmdil i;s Ndjkd jevigyk</h1>
                <div class="programme-info">
                  <span class="left">7 day Program</span>
                  <span class="right">Start on - 02 nd January 2022</span>
                </div>
                <hr />
                <p class="description">
                  ld¾hnyq, .sys Ôú;fha ,efnk mqxÑ ksjdvqfjka úfõlSj Ndjkd lrñka
                  O¾uh bf.k .kag uykais fjk f.!;u Y%djl orejka i|yd ksixi,
                  mßirhl i;shla mqrdjg" iqjfia O¾ufha yeisfrkakg uxfm;a újr
                  lrñka" uyfuõkdj Ndjkd wimq ixÑ;fha ks¾ud;D jQ wmf.a mskaj;a
                  f,dl= iajdóka jykafiaf.a ldre‚l ixl,amhlg wkqj wdrïN l<" Ndjkd
                  jevigyk'
                </p>
                <div class="button-block">
                  <a href="#" class="more-info">More Info <i class="bi bi-arrow-right"></i></a>
                  <a href="#" class="register">Register <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</section>

<section class="section-programmes">
  <div class="container">
    <div>
      <h2>
        <span class="tiny">The </span>Meditation Programmes
      </h2>
    </div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button
          class="nav-link pill-button active"
          id="pills-option-1"
          data-bs-toggle="pill"
          data-bs-target="#option-1"
          type="button"
          role="tab"
          aria-controls="option-1"
          aria-selected="true"
        >
          Teenager's and Children's Courses
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link pill-button"
          id="pills-option-2"
          data-bs-toggle="pill"
          data-bs-target="#option-2"
          type="button"
          role="tab"
          aria-controls="option-2"
          aria-selected="false"
        >
          Short Courses
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button
          class="nav-link pill-button"
          id="pills-option-3"
          data-bs-toggle="pill"
          data-bs-target="#option-3"
          type="button"
          role="tab"
          aria-controls="option-3"
          aria-selected="false"
        >
          Ten Day and Other Adult Courses
        </button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="option-1"
        role="tabpanel"
        aria-labelledby="pills-option-1"
      >
        <div class="pill-content">
          <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img
                  src="{{url('achi/images/20210505_142009.png')}}"
                  class="card-img-top"
                  alt="gallery-thumbnail"
                />
                <div class="card-body">
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="option-2"
        role="tabpanel"
        aria-labelledby="pills-option-2"
      >
        <div class="pill-content">
          <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img
                  src="{{url('achi/images/20210505_142009.png')}}"
                  class="card-img-top"
                  alt="gallery-thumbnail"
                />
                <div class="card-body">
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="option-3"
        role="tabpanel"
        aria-labelledby="pills-option-3"
      >
        <div class="pill-content">
          <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img
                  src="{{url('achi/images/20210505_142009.png')}}"
                  class="card-img-top"
                  alt="gallery-thumbnail"
                />
                <div class="card-body">
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
                  </div>
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
                  <h5 class="card-title">Teenager's and Children's Courses</h5>
                  <span class="card-date">Start on - 02nd January 2022</span>
                  <p class="card-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Atque deleniti sed dolor molestiae aut vero harum voluptatem
                    expedita possimus alias natus, odit recusandae est sit quas
                    ullam minus deserunt assumenda, quaerat id, excepturi ad
                    illum animi? Autem temporibus natus doloribus!
                  </p>
                  <div>
                    <a href="#">More Info <i class="bi bi-arrow-right"></i></a>
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