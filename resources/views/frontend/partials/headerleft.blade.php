
            <!-- Header Start--->
            <header class="header_section secondary_header sticky text-white clearfix">
                <div class="header_top clearfix">
                    <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <ul class="header_contact_info ul_li clearfix">
                                <li>
                                    <i class="fal fa-envelope"></i>
                                    <a class="text-light" href="#">mh.ayon222@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fal fa-phone"></i>
                                    +880-1791205437
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5">
                            <ul class="primary_social_links ul_li_right clearfix">
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom clearfix">
                <div class="container"><div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="brand_logo">
                            <a href="{{ route('website.home') }}">
                                <img src="{{ asset('frontend/assets/images/logo/logo2.png')}}" srcset="frontend/assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
                                <img src="{{ asset('frontend/assets/images/logo/logo.png')}}" srcset="frontend/assets/images/logo/logo_02_2x.png 2x" alt="logo_not_found">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
                        <ul class="header_action_btns ul_li_right clearfix">
                            <li>
                                <button type="button" class="search_btn" data-toggle="collapse" data-target="#collapse_search_body" aria-expanded="false" aria-controls="collapse_search_body">
                                    <i class="fal fa-search">
                                    </i>
                                </button>
                            </li>

                            @auth
                            <li class="dropdown">
                                <button type="button" class="user_btn" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fal fa-user"></i>
                            </button>
                            <div class="user_dropdown rotors_dropdown dropdown-menu clearfix" aria-labelledby="user_dropdown">
                                <div class="profile_info clearfix">
                                    <a href="{{ route('website.user.profile.home') }}" class="user_thumbnail">
                                        <img src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="thumbnail_not_found">
                                    </a>
                                    <div class="user_content"><h4 class="user_name">
                                        <a href="{{ route('website.user.profile.home') }}">{{ auth()->user()->name }}</a></h4>
                                        <span class="user_title">{{ auth()->user()->role }}</span>
                                    </div>
                                </div>
                                <ul class="ul_li_block clearfix">
                                    <li>
                                        <a href="{{ route('website.user.profile.home') }}"><i class="fal fa-user-circle">
                                        </i> Profile
                                    </a>
                                </li>
                                <li>

                                </li>
                                <li>
                                    <a href="{{ route('website.user.logout') }}"><i class="fal fa-sign-out">
                                    </i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
         @else
                <li>
                    <a class="text-warning font-weight-bolder small" href="{{ route('website.user.login.form') }}">
                        <i class="fas fa-sign-in-alt text-success"> </i> Sign In
                    </a>
                </li>
                <li>

                    @endauth
                    <button type="button" class="mobile_sidebar_btn">
                        <i class="fal fa-align-right">
                        </i>
                    </button>
                </li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-12">
            <nav class="main_menu clearfix">
                <ul class="ul_li_center clearfix">
                    <li  class="{{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('website.home') }}">Home</a>
                    </li>
                    <li class="{{ request()->is('car/our-cars') ? 'active' : '' }}">
                        <a href="{{ route('website.car.list') }}">Our Cars</a>
                    </li>
                    <li class="{{ request()->is('our-services') ? 'active' : '' }}">
                        <a href="{{ route('website.services') }}">Our Service</a>
                    </li>
                    <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                        <a href="{{ route('website.about') }}">About</a>
                    </li>
                    <li class="{{ request()->is('faq') ? 'active' : '' }}">
                        <a href="{{ route('website.faq') }}">F.A.Q.</a>
                    </li>
                    <li class="{{ request()->is('contact-us') ? 'active' : '' }}">
                        <a href="{{ route('website.contact') }}">Contact Us</a>
                    </li>
            </ul>
    </nav>
</div>
</div>
</div>
</div>
<!--end Nav Bar-->


<!--Serch Bar  -->

<div id="collapse_search_body" class="collapse_search_body collapse">
<div class="search_body">
    <div class="container">
        <form action="#">
            <div class="form_item">
                <input type="search" name="search" placeholder="Type here...">
                <button type="submit">
                    <i class="fal fa-search">
                    </i>
                </button>
            </div>
        </form>
    </div>
</div>
</div>
</header>
