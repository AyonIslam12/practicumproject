@extends('frontend.master')

@section('title')
Car-Home

@stop


@section('content')
<section class="slider_section text-white text-center position-relative clearfix">
	<div class="main_slider clearfix">
		<div class="item has_overlay d-flex align-items-center" data-bg-image="{{asset('frontend/assets/images/backgrounds/bg_02.jpg')}}">
        <div class="overlay">
		</div>
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
			<div class="slider_content text-center">
				<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">Sarkar Car Rental Website</h3>
				<p data-animation="fadeInUp" data-delay=".5s">
                   ...Choose Your Favorite Car...
				</p>
				<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
					<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book Now
						<img src="{{ asset('frontend/assets/images/icons/icon_01.png')}}" alt="icon_not_found">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</section>



<section class="feature_section sec_ptb_150 clearfix">
	<div class="container">
        <div class="row justify-content-center">
		<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
			<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
				<h2 class="title_text mb_15">
					<span>Featured Vehicles</span>
				</h2>
				<p class="mb-0">Mauris cursus quis lorem sed cursus. Aenean aliquam pellentesque magna, ut dictum ex pellentesque
				</p>

			</div>
		</div>
	</div>
	<ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up" data-aos-delay="300">
		<li>
			<button class="button active" data-filter="*">All</button>
		</li>
		<li>
			<button class="button" data-filter=".sedan">Sedan</button>
		</li>
		<li>
			<button class="button" data-filter=".sports">Sports</button>
		</li>
		<li>
			<button class="button" data-filter=".luxury">Luxury</button>
		</li>
	</ul>
	<div class="feature_vehicle_filter element-grid clearfix">
		<div class="element-item sedan" data-category="sedan">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
				<h3 class="item_title mb-0"><a href="#!">2015 Shevrolet Corvette Stingray Z51</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_01.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$230/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Gasoline</li>
				</ul>
			</div>
		</div>
		<div class="element-item sports" data-category="sports">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
				<h3 class="item_title mb-0">
					<a href="#!">2019 Shevrolet Corvette Stingray Red</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_02.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$230/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Hybrid</li>
				</ul>
			</div>
		</div>
		<div class="element-item luxury" data-category="luxury">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
				<h3 class="item_title mb-0">
					<a href="#!">2015 Shevrolet Corvette Stingray Z51</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_03.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$120/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Gasoline</li>
				</ul>
			</div>
		</div>
		<div class="element-item sedan" data-category="sedan">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
				<h3 class="item_title mb-0">
					<a href="#!">2020 Audi New Generation P00234</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_04.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$230/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Electro</li>
				</ul>
			</div>
		</div>
		<div class="element-item sports" data-category="sports">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="300">
				<h3 class="item_title mb-0">
					<a href="#!">2015 Shevrolet Corvette Stingray Z51</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_05.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$160/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Gasoline</li>
				</ul>
			</div>
		</div>
		<div class="element-item luxury" data-category="luxury">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="500">
				<h3 class="item_title mb-0">
					<a href="#!">2015 Shevrolet Corvette Stingray Z51</a>
				</h3>
				<div class="item_image position-relative">
					<a class="image_wrap" href="#!">
						<img src="{{ asset('frontend/assets/images/feature/img_06.jpg')}}" alt="image_not_found">
					</a>
					<span class="item_price bg_default_blue">$230/Day</span>
				</div>
				<ul class="info_list ul_li_center clearfix">
					<li>Sports</li>
					<li>Auto</li>
					<li>2 Passengers</li>
					<li>Hybrid</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
		<a class="custom_btn bg_default_red btn_width text-uppercase" href="#!">Book A Car
			<img src="{{ asset('frontend/assets/images/icons/icon_01.png')}}" alt="icon_not_found">
		</a>
	</div>
</div>
</section>




<hr class="m-0" data-aos="fade-up" data-aos-delay="100">

<section class="testimonial_section sec_ptb_150 clearfix">
	<div class="container">
		<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
			<h2 class="title_text mb-0">
				<span>What Clients Say about Us</span>
			</h2>
		</div>
		<div class="testimonial_carousel_wrap position-relative">
			<div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">
			{{-- 	@foreach ($results as $result )


                <div class="item @if($loop->first)active @endif">
					<div class="testimonial_item2 text-center">
						<p class="mb_30">{{ $result->message }}</p>
						<div class="admin_info">
							<div class="admin_image">
								<img src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="image_not_found">
							</div>
							<h4 class="admin_name">{{ auth()->user()->name }}</h4>


						</div>
					</div>
				</div>
                @endforeach --}}


	</div>
	<div class="carousel_nav position_ycenter">
		<button type="button" class="ts_left_arrow">
			<i class="fal fa-angle-left"></i>
		</button>
		<button type="button" class="ts_right_arrow">
			<i class="fal fa-angle-right"></i>
		</button>
	</div>
</div>
</div>
</section>




</main>




@stop
