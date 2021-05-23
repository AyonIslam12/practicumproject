<!DOCTYPE html>
<html lang="en">
<head>
	<title>Driver Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('driver/auth/css/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('driver/auth/css/main.css') }}">

    @toastr_css
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter p-5 rounded">
		<div class="container-login100">

			<div class=" row wrap-login100">
				<div class="col-md-6 col-sm-12">

                    <form class="login100-form validate-form"  action="{{ route('employee.do.login') }}" method="post">
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Driver Login
                        </span>

              <!--Success or Error Msg -->
             <div class="row">
                <div class="col-md-12">
                  @if(session('message'))
                  <div class="alert alert-{{ session('type') }}">
                       <p class="text-center font-weight-bolder text-dark">{{ session('message') }}</p>
                  </div>
                @endif

                </div>

            </div>
                        <div class="wrap-input100 validate-input" value="{{ old('email') }}" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>
                    {{-- 	<div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>

                            <div>
                                <a href="#" class="txt1">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
     --}}

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>

                    {{-- 	<div class="text-center p-t-46 p-b-20">
                            <span class="txt2">
                                or sign up using
                            </span>
                        </div> --}}

                        {{-- <div class="login100-form-social flex-c-m">
                            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                                <i class="fa fa-facebook-f" aria-hidden="true"></i>
                            </a>

                            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div> --}}
                    </form>


                </div>

                    <div class="col-md-6 col-sm-12 login100-more" style="background-image: url('{{ asset('driver/auth/images/bg_01.jpg') }}');">
                    </div>


			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('driver/auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('driver/auth/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('driver/auth/js/main.js') }}"></script>

</body>
@jquery
@toastr_js
@toastr_render

</html>
