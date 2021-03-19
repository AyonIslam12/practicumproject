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

    <section id="container">
        <!--header start-->
        @include('backend.partials.topbar')
        <!--header end-->
        <!--sidebar start-->
        @include('backend.partials.sidebar')
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="card">
                            <div class="symbol terques">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value">
                                <h1 class="count">
                                    0
                                </h1>
                                <p class="text-success">All Customers</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="card">
                            <div class="symbol red">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count2">
                                    0
                                </h1>
                                <p class="text-primary">All Drivers</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="card">
                            <div class="symbol yellow">
                                <i class="fas fa-car-side"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count3">
                                    0
                                </h1>
                                <p class="text-info">All Active Cars</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="card">
                            <div class="symbol yellow">
                                <i class="fas fa-car-crash"></i>
                            </div>
                            <div class="value">
                                <h1 class=" count3">
                                    0
                                </h1>
                                <p class="text-info">Insurance</p>
                            </div>
                        </section>
                    </div>

                </div>
                <!--state overview end-->

                <div class="row pt-3">
                    <div class="col-md-12">
                        @yield('content')

                    </div>

                </div>


            </section>
        </section>
        <!--main content end-->


    @include('backend.partials.footer')

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

      <!--script for this page-->
      <script src="{{ asset('admin_assets/js/sparkline-chart.js') }}"></script>
      <script src="{{ asset('admin_assets/js/easy-pie-chart.js') }}"></script>
      <script src="{{ asset('admin_assets/js/count.js') }}"></script>


    </body>
  </html>
