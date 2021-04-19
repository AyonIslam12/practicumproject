<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!--fontwase-->
     <script src="https://kit.fontawesome.com/c4f7856497.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend_assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
  </head>
  <body>



@include('frontend.partials.header')



  @yield('content')


@include('frontend.partials.footer')


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('frontend_assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/aos.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('frontend_assets/js/google-map.js')}}"></script>
  <script src="{{ asset('frontend_assets/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
