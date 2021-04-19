@extends('frontend.master')

@section('content')


<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-8 offset-2">
        <h3 class="text-center text-primary text-uppercase">User Registration</h3>

         <!--Success Msh -->
       <div class="row">
            <div class="col-md-12">
         @if(session('success'))
            <div class="text-center alert alert-success">
                <p class="text-center text-bolder">{{ session('success') }}</p>
            </div>
        @endif
          <form action="{{ route('website.user.register') }}" class="bg-light p-5 contact-form" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name">
                  @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                  @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" placeholder="Enter Your Password">
                  @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-lg ">Register</button>
              <span class=" d-inline"> If you already  have a account then go to ?  <a href="{{ route('website.user.login.form') }}" >Login</a></span>

            </div>

          </form>

        </div>
      </div>
        </div>
      </div>


    </div>
  </section>









@endsection
