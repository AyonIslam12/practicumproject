@extends('frontend.master')

@section('title')
Your-Profile
@stop


@section('content')
<!--Here-->
<!--Start-->
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_10.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">My Account</h1>
        </div>
    </div>
    <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">

    </div>
</section>

<section class="account_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
            <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up" data-aos-delay="100"><h3 class="list_title mb_15">Account Details:</h3>
                <ul class="ul_li_block nav" role="tablist">
                    <li>
                        <a href="{{ route('website.user.profile.home') }}" class="user_thumbnail pb-5">
                            <img width="150px" class="rounded-circle m-auto" src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="thumbnail_not_found">
                        </a>
                        <a class="active" data-toggle="tab" href="#admin_tab">
                            <i class="fas fa-user"></i>
                           {{ auth()->user()->name }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('website.user.logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            Log Out
                             <img class="arrow" src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#profile_tab">
                            <i class="fas fa-address-book"></i>
                            Booking Profiles
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#history_tab">
                            <i class="fas fa-file-alt"></i>
                        Booking History
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
    <div class="account_tab_content tab-content">
        <div id="admin_tab" class="tab-pane active">
            <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                <h3 class="list_title mb_30">Account:</h3>
                <ul class="ul_li_block clearfix">
                <li><span>Name:</span> {{ auth()->user()->name }}</li>
                <li><span>E-mail:</span> {{ auth()->user()->email }}</li>

                <li><span>Phone Number:</span> +880-{{ auth()->user()->phone }}</li>
                <li><span>Role:</span>  {{ ucfirst(auth()->user()->role) }}</li>
                <li><span>Address:</span> {{ ucfirst(auth()->user()->address) }}</li>
            </ul>
            <a class="text_btn text-uppercase" href="#!">
                <span>Change Account Information</span>
                <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
            </a>
        </div>
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
            <h3 class="list_title mb_30">Booking Profiles:</h3>
            <ul class="ul_li_block clearfix">
                <li><span>Profile ID:</span> 1234557jt</li>
                <li><span>Payment Method:</span> Visa Credit Card</li>
                <li><span>Phone Number:</span> +1-202-555-0104</li>
            </ul>
        </div>
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
            <h3 class="list_title mb_30">Booking History:</h3>
            <ul class="ul_li_block clearfix"><li>
                <span>Upcoming Reservations:</span> No Reservations Yet</li>
                <li><span>Past Rentals:</span> 0</li>
            </ul>
            <a class="text_btn text-uppercase" href="#!">
                <span>Book A Car</span>
                <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
            </a>
        </div>
    </div>
    <div id="profile_tab" class="tab-pane fade">
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
            <h3 class="list_title mb_30">Booking Profiles:</h3>
            <ul class="ul_li_block clearfix">
                <li><span>Profile ID:</span> 1234557jt</li>
                <li><span>Payment Method:</span> Visa Credit Card</li>
                <li><span>Phone Number:</span> +1-202-555-0104</li>
            </ul>
        </div>
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
            <h3 class="list_title mb_30">Booking History:</h3>
            <ul class="ul_li_block clearfix">
                <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                <li><span>Past Rentals:</span> 0</li>
            </ul>
            <a class="text_btn text-uppercase" href="#!">
                <span>Book A Car</span>
                <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
            </a>
        </div>
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
            <h3 class="list_title mb_30">Account:</h3>
            <ul class="ul_li_block clearfix">
                <li><span>Name:</span> Rakibul Islam Dewan</li>
                <li><span>E-mail:</span>
                 <a href="https://html.merku.love/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9b4a0b7b8b4bc99bcb4b8b0b5f7bab6b4">[email&#160;protected]</a>
                </li>
                <li><span>Phone Number:</span> +1-202-555-0104</li>
                <li><span>Country:</span> United States</li>
                <li><span>Address:</span> 60 Stonybrook Lane Atlanta, GA 30303</li>
            </ul>
            <a class="text_btn text-uppercase" href="#!">
                <span>Change Account Information</span>
                <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
            </a>
        </div>
    </div>
<div id="history_tab" class="tab-pane fade">
    <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
        <h3 class="list_title mb_30">Booking History:</h3>
        <ul class="ul_li_block clearfix">
            <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
            <li><span>Past Rentals:</span> 0</li>
        </ul>
        <a class="text_btn text-uppercase" href="#!">
        <span>Book A Car</span>
        <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
        </a>
    </div>
    <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
        <h3 class="list_title mb_30">Booking Profiles:</h3>
        <ul class="ul_li_block clearfix"><li>
            <span>Profile ID:</span> 1234557jt</li>
            <li><span>Payment Method:</span> Visa Credit Card</li>
            <li><span>Phone Number:</span> +1-202-555-0104</li>
        </ul>
    </div>
    <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
        <h3 class="list_title mb_30">Account:</h3>
        <ul class="ul_li_block clearfix"><li>
            <span>Name:</span> Rakibul Islam Dewan</li>
            <li>
                <span>E-mail:</span>
                <a href="https://html.merku.love/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="107d697e717d7550757d71797c3e737f7d">[email&#160;protected]
            </a>
        </li>
            <li><span>Phone Number:</span> +1-202-555-0104</li>
            <li><span>Country:</span> United States</li>
            <li><span>Address:</span> 60 Stonybrook Lane Atlanta, GA 30303</li>
        </ul>
        <a class="text_btn text-uppercase" href="#!">
            <span>Change Account Information</span>
            <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
        </a>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>




@endsection
