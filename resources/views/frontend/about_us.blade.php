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
        <h2>About us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 d-flex align-items-center px-4">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum
        </p>
      </div>
      <div class="col-lg-6">
        <img
          src="{{url('achi/images/statue with pond.png')}}"
          alt="about-image"
        />
      </div>
    </div>
  </div>
</section>


<section class="section-message">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mobile-bottom">
        <img
          src="{{url('achi/images/Ven.Lenagala Siriniwasa Thero.png')}}"
          alt="message-images"
        />
      </div>
      <div class="col-lg-8 mobile-top">
        <span class="message-title">Founder Message</span>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum
        </p>
        <span class="blockquote">- Ven.Lenagala Siriniwasa Thero -</span>
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

  function switcher(x) {
    if (x.matches) {
        $(".mobile-bottom").insertAfter(".mobile-top");
    } else {
        $(".mobile-top").insertAfter(".mobile-bottom");
    }
}

const windowSize = window.matchMedia("(max-width: 960px)");

switcher(windowSize);

windowSize.addListener(switcher);
</script>
@endpush
