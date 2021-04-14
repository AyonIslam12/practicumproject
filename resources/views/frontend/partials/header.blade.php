<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sarker<span>Cars</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('website.home') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}"><a href="{{ route('website.about') }}" class="nav-link">About</a></li>
          <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="{{ route('website.services') }}" class="nav-link">Services</a></li>
          <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}"><a href="{{ route('website.pricing') }}" class="nav-link">Pricing</a></li>
          <li class="nav-item {{ request()->is('car/all-cars') ? 'active' : '' }}"><a href="{{ route('website.car.list') }}" class="nav-link">Cars</a></li>
          <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}"><a href="{{ route('website.blogs') }}" class="nav-link">Blog</a></li>
          <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ route('website.contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('website.user.login.form') }}">Login</a></li>
        </div>
    </div>
  </nav>

  {{-- <div class="top-nav ">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder="Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset('admin_assets/img/avatar1_small.jpg') }}" class=" image img-fluid">
                <span class="username">Jhon Doue</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout dropdown-menu-right">
                <div class="log-arrow-up"></div>
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>

        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div> --}}

<!-- END nav -->
{{-- <div class="hero-wrap ftco-degree-bg" style="background-image: url({{asset('frontend_assets/images/bg_3.jpg') }})" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">
            <div class="text w-100 text-center mb-md-5 pb-md-5">
              <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
              <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                      <span class="ion-ios-play"></span>
                  </div>
                  <div class="heading-title ml-5">
                      <span>Easy steps for renting a car</span>
                  </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend_assets/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Contact Us</h1>
        </div>
      </div>
    </div>
  </section>


{{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('frontend_assets/images/bg_3.jpg') }})" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Car Details</h1>
      </div>
    </div>
  </div>
</section>
 --}}
