<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Sarker<span>Cars</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>





      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class=" navbar-nav ml-auto">
          <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('website.home') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}"><a href="{{ route('website.about') }}" class="nav-link">About</a></li>
          <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="{{ route('website.services') }}" class="nav-link">Services</a></li>
          <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}"><a href="{{ route('website.pricing') }}" class="nav-link">Pricing</a></li>
          <li class="nav-item {{ request()->is('car/all-cars') ? 'active' : '' }}"><a href="{{ route('website.car.list') }}" class="nav-link">Cars</a></li>
          <li class="nav-item {{ request()->is('blogs') ? 'active' : '' }}"><a href="{{ route('website.blogs') }}" class="nav-link">Blog</a></li>
          <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{ route('website.contact') }}" class="nav-link">Contact</a></li>

          @auth
          <ul class="navbar-nav ">
            <!-- PROFILE DROPDOWN - scrolling off the page to the right -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navDropDownLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img width="30px" height="30px" class="img-fluid rounded-circle" src="https://www.luriellp.com/wp-content/uploads/2015/08/img-generic-employee.jpg" alt="">
                </a>
                <div class="dropdown-menu" aria-labelledby="navDropDownLink">
                    <a class="dropdown-item" href="#"> {{ auth()->user()->name}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('website.user.logout') }}">Logout</a>


                </div>
            </li>
        </ul>
        @else
        <li class="nav-item"><a class="nav-link" href="{{ route('website.user.login.form') }}">Login</a></li>
          @endauth

          <input  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn  btn-outline-success btn-sm my-2 my-sm-0" type="submit">Search</button>

        </ul>

        </div>
    </div>
  </nav>

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('frontend_assets/images/bg_3.jpg') }})" data-stellar-background-ratio="0.5">
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

