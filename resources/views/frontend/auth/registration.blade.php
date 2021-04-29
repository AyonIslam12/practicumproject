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

         <!--Success or Error Msg -->
         <div class="row">
            <div class="col-md-8 offset-2">
              @if(session('message'))
              <div class="alert alert-{{ session('type') }}">
                   <p class="text-center font-weight-bolder text-dark">{{ session('message') }}</p>
              </div>
            @endif

            </div>

        </div>

        <span class="new_account mb_15">Do You have already an account?
            <a href="{{ route('website.user.login.form') }}">Go Login</a>
        </span>

    </div>

    <form action="{{ route('website.user.register') }}" method="post" enctype="multipart/form-data">
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
                    <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone Number*">
                    @error('phone') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
              {{--   <div class="form_item">
                    <select name="role" class="form-control @error('role') is-invalid @enderror">
                        <option value="">Select Your Role</option>
                        <option value="customer">Customer</option>
                        <option value="employee">Employee</option>
                    </select>

                </div> --}}

                <div class="form_item">
                    <input type="password" name="password" placeholder="Password*"
                    class=" form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
                <div class="form_item">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password*"
                    class=" form-control @error('password') is-invalid @enderror" value="{{ old('password_confirmation') }}">
                    @error('password') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>
                <div class="form_item">
                    <input type="file" name="image"   class=" form-control">

                </div>
                <div class="form_item">
                    <input type="text" name="address" value="{{ old('address') }}" placeholder="Address*" class="form-control">
                </div>
                <p>
                    Your personal data will be used in mapping with the vehicles you added to the website, to manage access to your account, and for other purposes described in our
                </p><button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">
                    Register
                    <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
                </button>

        </div>
    </form>
</div>

</div>
</section>
@endsection
