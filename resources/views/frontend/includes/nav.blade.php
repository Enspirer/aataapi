<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
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
      <li class="nav-item">
        <a
          class="{{ Request::segment(1) == null ? 'active' : null }}"
          href="{{ route('frontend.index') }}"
        >
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href=""> Center </a>
      </li>
      <li class="nav-item">
        <a href=""> Meditation </a>
      </li>
      <li class="nav-item">
        <a href=""> Programs </a>
      </li>
      <li class="nav-item">
        <a href="{{route('frontend.media')}}"> Media </a>
      </li>
      <li class="nav-item">
        <a href="{{route('frontend.gallery')}}"> Gallery </a>
      </li>
      <li class="nav-item">
        <a href="{{route('frontend.contact_us')}}"> Contact Us </a>
      </li>
      <li class="nav-item">
        <a href="{{route('frontend.about_us')}}"> About Us </a>
      </li>
    </ul>
  </div>
</nav>
