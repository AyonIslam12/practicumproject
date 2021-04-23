@extends('frontend.master')

@section('title')
User-Registration

@stop

@section('content')
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_09.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white mt-5">User Registration</h1>
        </div>
    </div>

</section>

<section class="register_section sec_ptb_100 clearfix">

    <div class="register_card mb-0" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
        <div class="section_title mb_30 text-center">
        <h2 class="title_text mb-0" data-aos="fade-up" data-aos-delay="300">
            <span>Register</span>
        </h2>
         <!-- Success Message-->
        <div class="row mt-2">
            <div class="col-8 offset-2">

                @if(session('success'))
                    <p class="alert-success text-center text-bolder py-3">{{ session('success')  }}</p>
                @endif
            </div>
        </div>

        <span class="new_account mb_15">Do You have already an account?
            <a href="{{ route('website.user.login.form') }}">Go Login</a>
        </span>

    </div>

    <form action="{{ route('website.user.register') }}" method="post">
        @csrf
        <div class="row justify-content-lg-between">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2 offset-sm-2" data-aos="fade-up" data-aos-delay="500">
                <div class="form_item">
                    <input type="text" name="name" placeholder="Your Name*" class=" form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
                <div class="form_item">
                    <input type="email" name="email" placeholder="Your Email*"
                    class=" form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
                <div class="form_item">
                    <input type="password" name="password" placeholder="Password*"
                    class=" form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
                <div class="form_item">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password*"
                    class=" form-control @error('name') is-invalid @enderror" value="{{ old('password_confirmation') }}">
                    @error('password') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
               {{--  <div class="form_item">
                    <input type="tel" name="Phone" placeholder="Phone Number*">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="700">
                <div class="form_item">
                    <h4 class="input_icon">Select Car Type</h4>
                    <select>
                        <option data-display="Choose Payment Details">Select Your Option</option>
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                        <option value="3" disabled="disabled">A disabled option</option>
                        <option value="4">Potato</option>
                    </select>
                </div>
                <div class="form_item">
                    <input type="text" name="country" placeholder="Country*">
                </div>
                <div class="form_item">
                    <input type="text" name="address" placeholder="Billing Address*">
                </div> --}}
                <p>
                    Your personal data will be used in mapping with the vehicles you added to the website, to manage access to your account, and for other purposes described in our
                </p><button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">
                    Login
                    <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
                </button>

        </div>
    </form>
</div>

</div>
</section>
@endsection
