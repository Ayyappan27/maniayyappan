<!-- =================================
Header -->
<header class="header bg-dark">
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="{{ route('front.home', app()->getLocale()) }}">
        <img class="img-fluid" src="{{ asset('front_office/images/logo.png') }}" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown {{ !Request::segment(2) ? 'active' : null }}">
            <!-- <a class="nav-link" href="{{ route('front.home', app()->getLocale()) }}">Home</a> -->
            <a class="nav-link" href="{{ route('front.home', app()->getLocale()) }}">{{ __('menu.Home') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('menu.Listing') }} <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">{{ __('menu.Job Grid') }}</a></li>
              <li><a class="dropdown-item" href="#">{{ __('menu.Job Listing') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown {{ Request::segment(2) === 'about' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('front.about', app()->getLocale()) }}" >{{ __('menu.About') }}</a>
          </li>
          <li class="nav-item dropdown {{ Request::segment(2) === 'contact' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('front.contact', app()->getLocale()) }}"  >{{ __('menu.Contact') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ __('menu.Profile') }} <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu left-side">
                <li><a class="dropdown-item" href="#">{{ __('menu.Dashboard') }}</a></li>
                <li><a class="dropdown-item" href="#">{{ __('menu.Profile') }}</a></li>
                <li><a class="dropdown-item" href="#">{{ __('menu.Change Password') }} </a></li>
                <li><a class="dropdown-item" href="#">{{ __('menu.Manage Candidates') }}</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="add-listing">
        <a class="btn btn-white btn-md" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"> <i class="far fa-user mr-3"></i>{{ __('menu.Sign in') }}</a>
      </div>
      <div class="add-listing ml-3">
        <a href="{{ route(Route::currentRouteName(), 'ar') }}">
            <img src="https://cdn.countryflags.com/thumbs/saudi-arabia/flag-round-500.png"
                style="width: 35px; border: 2px solid #ffffff; border-radius: 50px;  margin: 4px">
        </a>
        <a href="{{ route(Route::currentRouteName(), 'en') }}">
            <img src="https://cdn.countryflags.com/thumbs/united-kingdom/flag-round-500.png"
                style="width:35px; border: 2px solid #ffffff;border-radius: 50px; margin: 4px" alt="">
        </a>
        <a href="{{ route(Route::currentRouteName(), 'hi') }}">
            <img src="https://cdn.countryflags.com/thumbs/india/flag-round-500.png"
                style="width:35px; border: 2px solid #ffffff;border-radius: 50px; margin: 4px" alt="">
        </a>
      </div>
    </div>
  </nav>
</header>
<!--================================= Header -->