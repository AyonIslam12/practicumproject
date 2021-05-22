<!DOCTYPE html><html lang="en">
<head>
	<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>

	<link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/favourite_icon.png')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/fontawesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/aos.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/nice-select.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css')}}">
    @toastr_css
</head>
<body>

    <div class="row">
        <div class="col-md-12">

	@include('frontend.partials.preloaderScrol')
	@include('frontend.partials.headerleft')
	@include('frontend.partials.headerRight')

    @yield('content')

    @include('frontend.partials.footer')


</div>

</div>


<script src="{{ asset('frontend/assets/js/email-decode.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('frontend/assets/js/warning.js') }}"></script>

<script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
<script src="{{ asset('frontend/assets/js/parallaxie.js')}}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.js')}}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/masonry.pkgd.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
<script src="{{ asset('frontend/assets/js/gmaps.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.js')}}"></script>
<script src="{{ asset('frontend/assets/js/waypoint.js')}}"></script>
<script src="{{ asset('frontend/assets/js/counterup.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/validate.js')}}"></script>
<script src="{{ asset('frontend/assets/js/mCustomScrollbar.js')}}"></script>
<script src="{{ asset('frontend/assets/js/custom.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M3VBLFRFMN"></script>

@stack('js')
<script>
	function gtag()

	{dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","G-M3VBLFRFMN")
</script>
@jquery
@toastr_js
@toastr_render

</body>


</html>
