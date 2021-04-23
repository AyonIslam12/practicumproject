@extends('frontend.master')

@section('title')
F.A.Q
@stop


@section('content')
<!--Start-->

<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_08.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Frequently Asked Questions</h1>
        </div>
    </div>

</section>

<section class="faq_section sec_ptb_100 clearfix">
<div class="container">
    <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
        <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 order-last">
        <div class="faq_content">
        <h2 class="title_text mb_15" data-aos="fade-up" data-aos-delay="100">Official Rental Information:</h2>
                <p class="mb_30" data-aos="fade-up" data-aos-delay="200">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ipsum sapien, cursus eu scelerisque eget, scelerisque nec nulla. In turpis ex, congue ut scelerisque ut, euismod a turpis. Nunc metus purus, pretium ac nunc vitae, ultricies euismod magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer hendrerit, ipsum et tristique tincidunt, mauris eros tristique dolor, ut ornare turpis sapien at tellus
                </p>
        <div id="faq_accordion" class="faq_accordion mb_30">
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header">
                    <a data-toggle="collapse" href="#collapse_one">When the rentals can be extended up?</a>
                </div>
                <div id="collapse_one" class="collapse show" data-parent="#faq_accordion">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">

                    <a class="collapsed" data-toggle="collapse" href="#collapse_two">What documents and ID are required to rent a car?
                    </a>
                </div>
                <div id="collapse_two" class="collapse" data-parent="#faq_accordion">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header">
                    <a class="collapsed" data-toggle="collapse" href="#collapse_three">When ornare arcu tristique sit amet. Phasellus sed sapien vitae magna tempus pulvinar quis at est?
                    </a>
                </div>
                <div id="collapse_three" class="collapse" data-parent="#faq_accordion">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="400">
                <div class="card-header">
                    <a class="collapsed" data-toggle="collapse" href="#collapse_four">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per?
                    </a>
                </div>
                <div id="collapse_four" class="collapse" data-parent="#faq_accordion">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="500">
                <div class="card-header">
                    <a class="collapsed" data-toggle="collapse" href="#collapse_five">When the rentals can be extended up?
                    </a>
                </div>
                <div id="collapse_five" class="collapse" data-parent="#faq_accordion">
                    <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
            </div>
        </div>
        <p class="mb-0" data-aos="fade-up" data-aos-delay="600">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque ipsum sapien, cursus eu scelerisque eget, scelerisque nec nulla. In turpis ex, congue ut scelerisque ut, euismod a turpis. Nunc metus purus, pretium ac nunc vitae, ultricies euismod magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer hendrerit, ipsum et tristique tincidunt, mauris eros tristique dolor, ut ornare turpis sapien at tellus</p>
    </div>
</div>
<div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
    <aside class="sidebar_section faq_sidebar p-0 clearfix">
        <div class="sb_widget sb_search_form" data-aos="fade-up" data-aos-delay="100">
            <form action="#">
                <div class="form_item mb-0">
                    <input id="sb_search_input" type="search" name="search" placeholder="search">
                    <label class="input_icon" for="sb_search_input">
                    <i class="fal fa-search"></i>
                    </label>
            </div>
        </form>
    </div>
    <div class="sb_widget sb_category_list" data-aos="fade-up" data-aos-delay="200">
        <h3 class="sb_widget_title">Question Categories:</h3>
        <ul class="ul_li_block clearfix">
            <li>
                <a href="#!">
                    <i class="fas fa-caret-right"></i>
                     Official Rental Information
                </a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Billing Information</a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Claims & Car Damages</a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Payment Methods & Deposits</a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Bonus Cards & Programs</a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Car Rental Protection</a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-caret-right"></i> Imprint & Privacy</a>
            </li>
        </ul>
    </div>
    <div class="sb_widget sb_support_center" data-aos="fade-up" data-aos-delay="300">
        <h3 class="sb_widget_title">Support Center:</h3>
        <ul class="ul_li_block clearfix">
            <li><i class="fas fa-phone"></i> +880-179120437</li>
            <li><i class="fas fa-phone"></i> +880-179120438</li>
            <li>
                <i class="fas fa-headset"></i>
                <a class="text-dark"  href="#">mh.ayon222@gmail.com</a>
            </li>
            <li>
                <i class="fas fa-headset"></i>

                <a  class="text-dark" href="#">mehedihasan@gmail.com</a>
            </li>
        </ul>
    </div>
</aside>
</div>
</div>
</div>
</section>


<!--end-->


@endsection
