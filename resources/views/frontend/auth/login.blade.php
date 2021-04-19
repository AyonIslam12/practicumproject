@extends('frontend.master')

@section('content')


<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-8 offset-2">
        <h3 class="text-center text-primary text-uppercase">User Login</h3>

        <!--Success Msg -->
       <div class="row">
            <div class="col-md-12">
         @if(session('success'))
            <div class="text-center alert alert-success">
                <p class="text-center text-bolder">{{ session('success') }}</p>
            </div>
        @endif
        <!--Error Msg -->
        @if(session('message'))
        <div class="alert alert-{{ session('type') }}">
            <p class="text-center text-bolder text-danger">{{ session('message') }}</p>
        </div>
    @endif

          <form action="{{ route('website.user.login') }}" class="bg-light p-5 contact-form" method="post">
            @csrf

            <div class="form-group">
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
              @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" placeholder="Enter Your Password">
              @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-lg ">Login</button>
              <span class=" d-inline"> If you haven't any account yet go to ?  <a href="{{ route('website.user.registration.form') }}" >Registration</a></span>
            </div>

          </form>

        </div>
      </div>


    </div>
      </div>
    </div>
  </section>
@endsection
