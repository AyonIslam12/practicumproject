@extends('frontend.master')

@section('title')
About-Us

@stop
@section('content')

<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_06.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">About Us</h1>
    </div>
</div>

</section>
<!--main office-->
<section class="main_office_section sec_ptb_100 clearfix">
	<div class="container">
		<div class="row align-items-center justify-content-lg-between justify-content-sm-center">
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
				<div class="office_image" data-aos="fade-up" data-aos-delay="100">
					<img src="{{ asset('frontend/assets/images/about/img_01.jpg') }}" alt="image_not_found">
				</div>
			</div>

    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
	    <div class="office_info" data-aos="fade-up" data-aos-delay="300">
            <h3 class="item_title">Main Office:</h3>
            <ul class="ul_li_block clearfix">
                <li><i class="fas fa-map-marker-alt">

                </i> Sector 13, Uttara,Dhaka-1230</li>
                <li><i class="fas fa-clock"></i> WH: 9:00am - 9:30pm</li>
                <li><i class="fas fa-phone"></i> +880-1791205437</li>
                <li><i class="fas fa-envelope"></i>
                    <a href="#">mh.ayon222@gmail.com</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
</section>

<!--Why Used-->
<section class="service_section sec_ptb_150 pb-0 mb-3 text-white  pb-5" data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">
	<div class="container">
		<div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
			<h2 class="title_text text-white mb-0">
				<span>Why Usd</span>
			</h2>
		</div>
		<div class="row justify-content-center pb-5">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
					<div class="item_icon"><i class="far fa-shield-alt"></i>
					</div>
					<h3 class="item_title text-white">Secured Payment Guarantee</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
					<div class="item_icon">
						<i class="fal fa-headset"></i>
					</div>
					<h3 class="item_title text-white">Help Center & Support 24/7</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
					<div class="item_icon">
						<i class="far fa-shield-alt"></i>

					</div>
					<h3 class="item_title text-white">Booking any Class Vehicles</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
					<div class="item_icon">
						<i class="fas fa-briefcase"></i>
					</div>

					<h3 class="item_title text-white">Corporate and Business Services</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
					<div class="item_icon">
						<i class="fas fa-user-plus"></i>
					</div>
					<h3 class="item_title text-white">Car Sharing Options</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>

				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
					<div class="item_icon">
						<i class="fas fa-gem"></i>
					</div>
					<h3 class="item_title text-white">Limousine and Chauffeur Hire</h3>
					<p class="mb-0">Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum</p>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- Recent Review-->




@endsection
