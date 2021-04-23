@extends('frontend.master')

@section('title')
Car-Single-View
@stop

@section('content')
<!--Start-->

<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_02.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5"> Car's Single View </h1>
        </div>
    </div>

</section>
<div class="details_section sec_ptb_100 pb-0 clearfix">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="car_choose_carousel mb_30 clearfix">
    <div class="thumbnail_carousel" data-aos="fade-up" data-aos-delay="100">
        <div class="item">
            <div class="item_head">
                <h4 class="item_title mb-0">{{ $car->name }}</h4>
                <h4 class="item_title mb-0 text-right"><span class="small muted">Brand: </span>{{ $car->brand }}</h4>

            </div>
            <img class="border" src="{{ asset('uploads/cars/'.$car->image)}}" alt="image_not_found">

            <ul class="btns_group ul_li_center clearfix">
                <li>
                    <span class="custom_btn btn_width bg_default_blue text-k"><del class="text-danger">$3000/Day</del> {{ $car->price }}/Day</span>
                </li>
                <li>
                    <a href="{{ route('website.car.booking',$car->id) }}" class="custom_btn btn_width bg_default_red text-uppercase">
                        Book A Car
                        <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>
       <!--

         <div class="item">
            <div class="item_head">
                <h4 class="item_title mb-0">Infiniti Q50 2018</h4>
                <ul class="review_text ul_li_right clearfix">
                    <li class="text-right"><strong>Super</strong> <small>24+ Reviews</small>
                    </li>
                    <li>
                        <span class="bg_default_blue">4.8/5</span>
                    </li>
                </ul>
            </div>
            <img src="assets/images/gallery/img_07.jpg" alt="image_not_found">
            <ul class="btns_group ul_li_center clearfix">
                <li>
                    <span class="custom_btn btn_width bg_default_blue"><del>$800/Day</del> $400/Day</span>
                </li>
                <li>
                    <a href="#!" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car
                        <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>

        <div class="item">
            <div class="item_head">
                <h4 class="item_title mb-0">Infiniti Q50 2018</h4>
                <ul class="review_text ul_li_right clearfix">
                    <li class="text-right"><strong>Super</strong> <small>24+ Reviews</small>
                    </li>
                    <li>
                        <span class="bg_default_blue">4.8/5</span>
                    </li>
                </ul>
            </div>
            <img src="assets/images/gallery/img_07.jpg" alt="image_not_found">
            <ul class="btns_group ul_li_center clearfix">
                <li>
                    <span class="custom_btn btn_width bg_default_blue"><del>$800/Day</del> $400/Day</span>
                </li>
                <li>
                    <a href="#!" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car
                        <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>

            <div class="item">
                <div class="item_head">
                    <h4 class="item_title mb-0">Infiniti Q50 2018</h4>
                    <ul class="review_text ul_li_right clearfix">
                        <li class="text-right"><strong>Super</strong> <small>24+ Reviews</small>
                        </li>
                        <li>
                            <span class="bg_default_blue">4.8/5</span>
                        </li>
                    </ul>
                </div>
                <img src="assets/images/gallery/img_07.jpg" alt="image_not_found">
                <ul class="btns_group ul_li_center clearfix">
                    <li>
                    <span class="custom_btn btn_width bg_default_blue"><del>$800/Day</del> $400/Day</span>
                </li>
                <li>
                    <a href="#!" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car
                        <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>
        <div class="item">
            <div class="item_head">
                <h4 class="item_title mb-0">Infiniti Q50 2018</h4>
                <ul class="review_text ul_li_right clearfix">
                    <li class="text-right"><strong>Super</strong> <small>24+ Reviews</small>
                    </li>
                    <li>
                        <span class="bg_default_blue">4.8/5</span>
                    </li>
                </ul>
            </div>
            <img src="assets/images/gallery/img_07.jpg" alt="image_not_found">
            <ul class="btns_group ul_li_center clearfix">
                <li>
                    <span class="custom_btn btn_width bg_default_blue">
                        <del>$800/Day</del> $400/Day</span>
                    </li>
                    <li>
                        <a href="#!" class="custom_btn btn_width bg_default_red text-uppercase">
                            Book A Car
                            <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="thumbnail_carousel_nav" data-aos="fade-up" data-aos-delay="100">
            <div class="item">
                <img src="assets/images/gallery/child_01.jpg" alt="image_not_found">
            </div>
            <div class="item">
                <img src="assets/images/gallery/child_02.jpg" alt="image_not_found">
            </div>

            <div class="item">
                <img src="assets/images/gallery/child_03.jpg" alt="image_not_found">
            </div>
            <div class="item">
                <img src="assets/images/gallery/child_04.jpg" alt="image_not_found">
            </div>
            <div class="item">
                <img src="assets/images/gallery/child_01.jpg" alt="image_not_found">
            </div>
            <div class="item">
                <img src="assets/images/gallery/child_02.jpg" alt="image_not_found">
            </div>
        </div>

       -->

    </div>

    <div class="car_choose_content">


        <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="100">
            <li>
                <strong>Car Model: </strong>
                {{ $car->model }}
            </li>
                <li>
                    <strong>Car Color:</strong>
                    {{ $car->color }}
                </li>
                    <li>
                        <strong>Seats:</strong>
                        {{ $car->seats }}
                    </li>
                    <li>
                        <strong>Luggage:</strong>
                        {{ $car->luggage }}
                    </li>
                     <li>
                            <strong>Fuel Type:</strong>
                            {{ $car->fuel }}
                    </li>
                     <li>
                            <strong>Mileage:</strong>
                            {{ $car->mileage.' KMH ' }}
                    </li>
                     <li>
                            <strong>Transmission:</strong>
                            {{ $car->transmission.' KMH ' }}
                    </li>
                    <li>
                                <strong>Options:</strong>
                            Cruise Control, MP3 player, Automatic air conditioning, Wifi, GPS Navigation
                    </li>
            </ul>
    <div data-aos="fade-up" data-aos-delay="200">
        <a class="terms_condition" href="#!">
            <i class="fas fa-info-circle mr-1"></i>
            Terms and conditions
        </a>
    </div>

        <hr data-aos="fade-up" data-aos-delay="300">

     <div class="rent_details_info">
        <h4 class="list_title" data-aos="fade-up" data-aos-delay="100">Rent Details:</h4>
        <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="200">
             <li>
                 <i class="fas fa-id-card"></i>
                     Payment Guarantee
            </li>
            <li>
                 <i class="fas fa-business-time"></i>
                  Protect Your Rental
            </li>
            <li>
              <i class="fas fa-business-time"></i>
                 Receipt by Email
         </li>
    </ul>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="300">
                <li>
                    <i class="fas fa-user-friends"></i>
                Car Sharing
            </li>
            <li>
                <i class="fas fa-language"></i>
                    Multilanguage Support
                </li>
                <li>
                    <i class="fas fa-money-bill"></i>
                        Payment Options
                    </li>
                </ul>
            </div>
        </div>
    </div>

            <hr data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial_contants_wrap">
                <h3 class="item_title mb_30" data-aos="fade-up" data-aos-delay="100">Recent Reviews:</h3>
                <div class="testimonial_item clearfix">
                    <div class="admin_info_wrap clearfix" data-aos="fade-up" data-aos-delay="200">
                        <div class="admin_image">
                            <img src="{{ asset('frontend/assets/images/meta/img_01.png') }}" alt="image_not_found">
                        </div>
                        <div class="admin_content">
                            <h4 class="admin_name">Donovan Nordtrom</h4>
                            <ul class="rating_star ul_li clearfix">
                                <li class="active"><i class="fas fa-star"></i>
                                </li>
                                <li class="active">
                                    <i class="fas fa-star">	</i>

                            </li>
                            <li class="active">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="active">
                                <i class="fas fa-star"></i>
                            </li>
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
                    “Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
                </p>

    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="review_image" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('frontend/assets/images/testimonial/img_10.jpg') }}" alt="image_not_found">
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="review_image" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('frontend/assets/images/testimonial/img_11.jpg') }}" alt="image_not_found">
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="review_image" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('frontend/assets/images/testimonial/img_12.jpg') }}" alt="image_not_found">
        </div>
    </div>
</div>
</div>
</div>

<div class="links_erap clearfix">
<div class="row align-items-center justify-content-lg-between">
    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="abtn_wrap clearfix" data-aos="fade-up" data-aos-delay="100">
            <a class="text_btn text-uppercase" href="#!">
                <span>View All Reviews</span>
                <img src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
            </a>
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <ul class="primary_social_links ul_li_right clearfix" data-aos="fade-up" data-aos-delay="200">
            <li>
                <span class="social_list_title">Follow Us:</span>
            </li>
            <li>
                <a href="#!">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="#!">
                    <i class="fab fa-youtube">

                    </i>
                </a>
            </li>
            <li>
                <a href="#!">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#!">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#!"><i class="fas fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>






@endsection
