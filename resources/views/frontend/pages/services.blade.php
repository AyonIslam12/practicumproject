@extends('frontend.master')


@section('title')
Our-Services
@stop
@section('content')
<!--Start-->
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_12.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Services</h1>
        </div>
    </div>

</section>

<section class="service_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="section_title text-center" data-aos="fade-up" data-aos-delay="100">
            <h2 class="title_text mb-0">
                <span>Special offers</span>
            </h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="item_icon">
                        <i class="far fa-shield-alt"></i>
                    </div>
                    <h3 class="item_title">Secured Payment Guarantee</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="item_icon">
                        <i class="fal fa-headset"></i>
                    </div>
                    <h3 class="item_title">Help Center &amp; Support 24/7</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="item_icon"><i class="fas fa-gem"></i>
                    </div>
                    <h3 class="item_title">Booking Luxury and Sport Cars</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="item_icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="item_title">Corporate and Business Services</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="item_icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3 class="item_title">Car Sharing Options</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service_primary text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="item_icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="item_title">Limousine and Chauffeur Hire</h3>
                    <p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="booking_section sec_ptb_150 has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/backgrounds/bg_04.jpg">
    <div class="overlay" data-bg-gradient="linear-gradient(90deg, #161829, #292D45)">

    </div>
    <div class="container">
    <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6 offset-3">
            <div class="booking_content text-white">
                <h2 class="title_text text-white" data-aos="fade-up" data-aos-delay="100">Our clients always receive the highest class of service</h2>
                <ul class="booking_info_list ul_li_block clearfix">
            <li data-aos="fade-up" data-aos-delay="200">
                <i class="far fa-check"></i>
                    Etiam posuere nibh non urna scelerisque, vel dignissim lacus blandit
                </li>
                <li data-aos="fade-up" data-aos-delay="300"><i class="far fa-check"></i>
                    Pellentesque erat diam, tincidunt vel volutpat et, euismod ut massa
                </li>
                <li data-aos="fade-up" data-aos-delay="400"><i class="far fa-check"></i>
                    Morbi rutrum mi et felis vehicula dictum. Donec interdum augue nec nibh bibendum sollicitudin</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Recent Review-->
<hr class="my-2" data-aos="fade-up" data-aos-delay="100">


@stop
