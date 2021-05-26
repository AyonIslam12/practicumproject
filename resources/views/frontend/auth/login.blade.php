@extends('frontend.master')

@section('title')
User-Login

@stop

@section('content')

<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_09.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h1 class="page_title text-white mt-5">Login</h1>
        </div>
    </div>

</section>

<section class="register_section sec_ptb_100 clearfix">
<div class="container">
        <div class="register_card mb_60" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100"><div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="reg_image" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('frontend/assets/images/about/img_03.jpg') }}" alt="image_not_found">
        </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="reg_form" data-aos="fade-up" data-aos-delay="500">
        <h3 class="form_title text-center"> User LogIn</h3>
    <!--Validation Message-->
    @if(session('message'))
    <p class="text-center py-2  alert alert-{{ session('type') }}">{{ session('message') }}</p>
    @endif

    <span class="new_account mb_15">Log In or
    <a href="{{ route('website.user.registration.form') }}">Create an Account?</a>
    </span>
    <form action="{{ route('website.user.login') }}" method="post">
    @csrf
    <div class="form_item">
    <input type="email" name="email" placeholder="Your email" class=" form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
    @error('email') <span class="text-danger ">{{ $message }}</span> @enderror

    </div>
    <div class="form_item">
    <input type="password" name="password" placeholder="Password"  class=" form-control @error('password') is-invalid @enderror">
    @error('password') <span class="text-danger ">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="custom_btn bg_default_red text-uppercase">
        Login
    <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
    </button>
   {{--  <span class="reset_pass mb_15">
    <a href="#!">Reset Your Password by e-mail?</a>
    </span>
    <div class="checkbox_input mb-0">
    <label for="input_save">
        <input id="input_save" type="checkbox"> Save my name, email, and website in this browser for the next time I comment</label>
    </div> --}}
    </form>
    </div>
    </div>
    </div>
    </div>

    </section>

@endsection
