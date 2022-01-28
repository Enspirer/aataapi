<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light mb-4">
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="@lang('labels.general.toggle_navigation')"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item {{ Request::segment(1) == null ? 'active' : null }}">
        <a href="{{ route('frontend.index') }}"> Home </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'center' ? 'active' : null }}">
        <a href="{{route('frontend.center')}}"> Center </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'meditation' ? 'active' : null }}">
        <a href="{{route('frontend.meditation')}}"> Meditation </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'programmes' ? 'active' : null }}">
        <a href="{{route('frontend.programmes')}}"> Programmes </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'media' ? 'active' : null }}">
        <a href="{{route('frontend.media')}}"> Media </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'gallery' ? 'active' : null }}">
        <a href="{{route('frontend.gallery')}}"> Gallery </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'donations' ? 'active' : null }}">
        <a href="{{route('frontend.donations')}}"> Donations </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'contact-us' ? 'active' : null }}">
        <a href="{{route('frontend.contact_us')}}"> Contact Us </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'about-us' ? 'active' : null }}">
        <a href="{{route('frontend.about_us')}}"> About Us </a>
      </li>
    </ul>
  </div>
</nav>
