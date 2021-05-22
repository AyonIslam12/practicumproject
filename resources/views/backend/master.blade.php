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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" ></script>
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

    <!--dynamic table-->
    <link href="{{ asset('admin_assets/assets/advanced-datatable/media/css/demo_page.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/advanced-datatable/media/css/demo_table.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/data-tables/DT_bootstrap.css') }}" />
    @toastr_css
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


                <div class="row pt-3">
                    <div class="col-md-12">
                        @yield('content')

                    </div>

                </div>


            </section>
        </section>
        <!--main content end-->




      <!-- js placed at the end of the document so the pages load faster -->
      <script src="{{ asset('admin_assets/js/jquery.js') }}"></script>
      <script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
      <script class="include" type="text/javascript" src="{{ asset('admin_assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
      <script src="{{ asset('admin_assets/js/jquery.scrollTo.min.js') }}"></script>
      <script src="{{ asset('admin_assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
      <script src="{{ asset('admin_assets/js/jquery.sparkline.js') }}" type="text/javascript"></script>
      <script src="{{ asset('admin_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
      <script src="{{ asset('admin_assets/js/owl.carousel.js') }}" ></script>
      <script type="text/javascript" language="javascript" src="{{ asset('admin_assets/assets/advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
      <script src="{{ asset('admin_assets/js/jquery.customSelect.min.js') }}" ></script>
      <script src="{{ asset('admin_assets/js/respond.min.js') }}" ></script>
      <script type="text/javascript" src="{{ asset('admin_assets/assets/data-tables/DT_bootstrap.js') }}"></script>

      <!--right slidebar-->
      <script src="{{ asset('admin_assets/js/slidebars.min.js') }}"></script>

      <!--common script for all pages-->
      <script src="{{ asset('admin_assets/js/common-scripts5e1f.js?v=2') }}"></script>
      <script src="{{ asset('admin_assets/js/deleteAlert.js') }}"></script>
      <script src="{{ asset('admin_assets/js/dynamic_table_init.js') }}"></script>

      <!--script for this page-->
      <script src="{{ asset('admin_assets/js/sparkline-chart.js') }}"></script>
      <script src="{{ asset('admin_assets/js/easy-pie-chart.js') }}"></script>
      <script src="{{ asset('admin_assets/js/count.js') }}"></script>

      @stack('js')


    </body>

  </html>
