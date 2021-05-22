@extends('frontend.master')

@section('title')
Booking-History
@stop


@section('content')
<!--Here-->
<!--Start-->
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_10.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Your Booking History</h1>
        </div>
    </div>
    <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">

    </div>
</section>

<section class="account_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
            <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <h3 class="list_title mb_15 text-center">Your Profile</h3>
                <ul class="ul_li_block nav" role="tablist">
                    <li>
                        <a href="{{ route('website.user.profile.home') }}" class="user_thumbnail pb-5">
                            <img width="150px" class="rounded-circle m-auto" src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="thumbnail_not_found">
                        </a>
                        <a class="{{ request()->is('user/profile') ? 'active' : '' }}" href="{{ route('website.user.profile.home') }}">
                            <i class="fas fa-user"></i>
                           {{ auth()->user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('user/booking/history') ? 'active' : '' }}" href="{{ route('website.user.booking.history') }}">
                            <i class="fas fa-history"></i>
                        Booking History
                    </a>
                </li>
                <li>
                        <a class="{{ request()->is('user/testimonials') ? 'active' : '' }}" href="{{ route('website.user.testimonials.show') }}">
                            <i class="fas fa-file-alt"></i>
                        My Testimonials
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('user/update-password') ? 'active' : '' }}" href="{{ route( 'website.user.edit.password') }}">
                        <i class="fas fa-key"></i>
                   Change Password
                </a>
            </li>

                <li>
                    <a href="{{ route('website.user.logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        Log Out
                         <img class="arrow" src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
    <div class="account_tab_content ">
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
           <div class="row">
            <h2 class="list_title mb_30">Booking History:</h2>
            <hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

            @if(count($bookingHistory) > 0)
            @foreach($bookingHistory as $key => $history)


            <div class="col-8">
             <h3 class="list_title mb_30">{{ $history->bookingCar->name }}</h3>
             <h6 class="list_title mb_30"><span>Car Brand:</span>{{ $history->bookingCar->carBrand->brand }}</h6>
             <h6 class="list_title mb_30"><span>Car Engine Number:</span>{{ $history->bookingCar->car_engine }}</h6>
             <div class="booking-image">

                 <img width="150px" class="img-thumbnail" src="{{ asset('uploads/cars/'.$history->bookingCar->image) }}" alt="No-Image">

             </div>
             <ul class="ul_li_block clearfix"><li>
                 <span>Booking Date:</span> {{  date("Y-M-d",strtotime($history->from_date)) }}</li>
                 <li><span>Return Date:</span>{{  date("Y-M-d",strtotime($history->to_date)) }}</li>
                 <li><span> Rent/Day :</span>{{  $history->price_per_day}}.0 TK</li>
                 <li><span> Car Discount :</span>{{  $history->bookingCar->discount_offer}}.0 TK</li>
                 <li><span> Booking Insurance :</span>{{  $history->insurance_fee}}.0 TK</li>
                 <li><span>Total Price :</span>{{  $history->total_price}}.0 TK</li>
                 <li><span>Total Days :</span>@php
                  $daysCalculation = (strtotime($history->to_date)-strtotime($history->from_date));
                         $daysCalculation = round(($daysCalculation / (60 * 60 * 24))+1);
                        echo $daysCalculation." Days";
                     @endphp
                </li>
                 <li><span>Payment Status:</span> @if($history->due <= 0 )
                     <span class="text-dark">paid <i class="far fa-check-circle text-success"></i></span>
                     @else
                     <span class="text-dark">unpaid <i class="fas fa-times text-danger"></i></span>
                 @endif
             </li>
             </ul>
             <a class="text_btn text-uppercase" href="#!">
                 <span>Book A Car</span>
                 <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
             </a>

            </div>

            <div class="col-4">
                <div class="status-button">
                   <span class="text-dark font-weight-bold ">Booking: </span>
             @if($history->status=='confirmed')
                 <a href="#" class="btn btn-outline-success btn-md">{{ Str::ucfirst($history->status) }}</a>
               @elseif($history->status=='rejected')
               <a href="#" class="btn btn-outline-danger btn-md">{{ Str::ucfirst($history->status) }}</a>
               @elseif($history->status=='completed')
               <a href="#" class="btn btn-outline-primary btn-md">{{ Str::ucfirst($history->status) }}</a>
               @else
               <a href="#" class="btn btn-outline-warning btn-md">{{ Str::ucfirst($history->status) }}</a>
               @endif


                </div>

            </div>
            <hr class="mt-5 " data-aos="fade-up" data-aos-delay="100">
            @endforeach
            @else
            <div class="bg-dark rounded">
                <span class="text-light p-2 ">your  haven't any booking yet right now.</span>

            </div>
            @endif

           </div>


        </div>


</div>
</div>
</div>
</div>
</section>




@endsection
