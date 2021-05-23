<!doctype html>
<html lang="en" class="fixed left-sidebar-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title> @yield('title')</title>


    <!--fontwase-->
    <script src="https://kit.fontawesome.com/c4f7856497.js" crossorigin="anonymous"></script>


    <!--load progress bar-->
    <script src="{{ asset('driver/vendor/pace/pace.min.js') }}"></script>
    <link href="{{ asset('driver/vendor/pace/pace-theme-minimal.css') }}" rel="stylesheet" />


    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('driver/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('driver/vendor/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('driver/vendor/animate.css/animate.css') }}">
      <!--dataTable-->
      <link rel="stylesheet" href="{{ asset('driver/vendor/data-table/media/css/dataTables.bootstrap.min.css') }}">
      @toastr_css

    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('driver/stylesheets/css/style.css') }}">




</head>

<body>
    <div class="wrap">
        <!-- page HEADER -->
        <!-- ========================================================= -->
        @include('driver.partials.header')
        <!-- page BODY -->
        <!-- ========================================================= -->
        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            @include('driver.partials.sidebar')
            <!-- CONTENT -->
            <!-- ========================================================= -->
            <div class="content">
            	<div class="text-danger">
            		<!-- Button trigger modal -->

 <div class="row p-5">
 	<div class="col-6  col-sm-12 offset-3">
        @yield('content')

 	</div>

 </div>

   <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>


    <!--BASIC scripts-->
    <!-- ========================================================= -->
    <script src="{{ asset('driver/vendor/jquery/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('driver/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('driver/vendor/nano-scroller/nano-scroller.js') }}"></script>
    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{ asset('driver/javascripts/template-script.min.js') }}"></script>
    <script src="{{ asset('driver/javascripts/template-init.min.js') }}"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
@jquery
@toastr_js
@toastr_render
    <!--dataTable-->
    <script src="{{ asset('driver/vendor/data-table/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('driver/vendor/data-table/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('driver/javascripts/examples/tables/data-tables.js') }}"></script>
</body>

    <!--morris chart-->
    <script src="{{ asset('driver/vendor/chart-js/chart.min.js') }}"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{ asset('driver/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!--Examples-->

</body>



</html>
