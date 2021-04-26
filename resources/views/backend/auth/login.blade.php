{{--
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab-4/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2019 15:08:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mehedi Hasan Ayon">
    <meta name="keyword" content="Car, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">


    <title>@yield('title')</title>
    <!--fontwase-->
    <script src="https://kit.fontawesome.com/c4f7856497.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="{{ asset('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('admin_assets/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/jquery-file-upload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" >
    <!--right slidebar-->
    <link href="{{ asset('admin_assets/css/slidebars.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('admin_assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/style-responsive.css') }}" rel="stylesheet" />
    <style>

    </style>

  </head>

  <body>
    <div class="row pt-5 ">
        <div class="col-6 offset-3 pt-4 bg-info">
            <section class="card">
                <header class="card-header bg-secondary text-center">
                    <span class="text-light font-weight-bold">Admin Login</span>

                     <!--Success or Error Msg -->
                    @if(session('message'))
                    <div class="alert alert-{{ session('type') }}">
                         <p class="text-center text-bolder text-dark">{{ session('message') }}</p>
                    </div>
                 @endif
                </header>
                <div class="card-body">
                    <form  action="{{ route('admin.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email" value="{{ old('email') }}"  placeholder="Enter email">
                            @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password">
                            @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group text-right ">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                </div>
            </section>

        </div>

    </div>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="{{ asset('admin_assets/js/jquery.js') }}"></script>
 <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
 <script class="include" type="text/javascript" src="{{ asset('admin_assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
 <script src="{{ asset('admin_assets/js/jquery.scrollTo.min.js') }}"></script>
 <script src="{{ asset('admin_assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
 <script src="{{ asset('admin_assets/js/jquery.sparkline.js') }}" type="text/javascript"></script>
 <script src="{{ asset('admin_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
 <script src="{{ asset('admin_assets/js/owl.carousel.js') }}" ></script>
 <script src="{{ asset('admin_assets/js/jquery.customSelect.min.js') }}" ></script>
 <script src="{{ asset('admin_assets/js/respond.min.js') }}" ></script>

 <!--right slidebar-->
 <script src="{{ asset('admin_assets/js/slidebars.min.js') }}"></script>

 <!--common script for all pages-->
 <script src="{{ asset('admin_assets/js/common-scripts5e1f.js?v=2') }}"></script>
 <script src="{{ asset('admin_assets/js/deleteAlert.js') }}"></script>

 <!--script for this page-->
 <script src="{{ asset('admin_assets/js/sparkline-chart.js') }}"></script>
 <script src="{{ asset('admin_assets/js/easy-pie-chart.js') }}"></script>
 <script src="{{ asset('admin_assets/js/count.js') }}"></script>

 @stack('js')


</body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('admin_assets/auth/assets/css/login.css') }}">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{ asset('admin_assets/auth/assets/images/login.jpg') }}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">

              <p class="login-card-description text-center font-weight-bolder">Admin Login</p>

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

              <form action="{{ route('admin.login') }}" method="post" class="m-auto">
                @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email address">
                    @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="***********">
                    @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
                </form>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

