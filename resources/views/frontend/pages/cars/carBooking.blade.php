@extends('frontend.master')

@section('title')
Car-Booking
@stop


@section('content')

<!--Start-->
<section class="breadcrumb_section text-center clearfix">
	<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_03.jpg') }}">
		<div class="overlay">

		</div>
	<div class="container" data-aos="fade-up" data-aos-delay="100">
		<h1 class="page_title text-white pt-5">Reservation</h1>
	</div>
</div>

</section>

<section class="reservation_section sec_ptb_100 clearfix">
	<div class="container">
		<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center"><div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
			<div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100">
				<h3 class="item_title mb-0 bg-secondary">
                    <a class="text-light" href="#!">{{ $car->name }}</a>
				</h3>
			<div class="item_image position-relative">
				<a class="image_wrap" href="#!">
					<img style="max-height: 220px" src="{{ asset('uploads/cars/'.$car->image)}}" alt="image_not_found">
				</a>
				<span class="item_price bg_default_blue">{{ $car->price_per_day.' . 00 TK' }}/Day</span>
			</div>
			<ul class="info_list ul_li_center text-light font-weight-bolder bg-secondary clearfix">
                <li>{{ $car->carBrand->brand }}</li>
               <li>{{ $car->model }}</li>
                <li>{{'Seats: '. $car->seats }}</li>

            </ul>
		</div>
	</div>

<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
	<div class="reservation_form">
		<form action="#">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
					<div class="form_item" data-aos="fade-up" data-aos-delay="100">
						<h4 class="input_title">Pick Up Location</h4>
						<div class="position-relative">
							<input id="location_two" type="text" name="location" placeholder="86 Albert Road, London, N51 4VK">
							<label for="location_two" class="input_icon">
								<i class="fas fa-map-marker-alt"></i>
							</label>
						</div></div>
					</div>
			<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="200">
					<h4 class="input_title">Pick A Date</h4>
					<input type="date" name="date">
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="300">
					<h4 class="input_title">Time</h4>
					<input type="time" name="time">
				</div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="400">
					<h4 class="input_title">Pick Up Location</h4>
					<div class="position-relative">
						<input id="location_three" type="text" name="location" placeholder="86 Albert Road, London, N51 4VK">
						 <label for="location_three" class="input_icon">
						 	<i class="fas fa-map-marker-alt"></i>
						 </label>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="form_item" data-aos="fade-up" data-aos-delay="500">
						<h4 class="input_title">Pick A Date</h4>
						<input type="date" name="date"></div>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
						<div class="form_item" data-aos="fade-up" data-aos-delay="600">
							<h4 class="input_title">Time</h4>
							<input type="time" name="time">
						</div>
					</div>
				</div>

				<hr class="mt-0" data-aos="fade-up" data-aos-delay="700">

				<div class="reservation_offer_checkbox">
					<h4 class="input_title" data-aos="fade-up" data-aos-delay="800">Your Offer Includes:</h4>
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="900"><div class="checkbox_input">
							<label for="offer1">
								<input type="checkbox" id="offer1" checked="checked"> Registration Free/ Road Tax
							</label>
						</div>
						<div class="checkbox_input">
							<label for="offer2">
								<input type="checkbox" id="offer2" checked="checked"> Fully Comprehensive Insurance</label>
							</div>
							<div class="checkbox_input">
								<label for="offer3">
									<input type="checkbox" id="offer3" checked="checked"> Unlimited Mileage
								</label>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="900"><div class="checkbox_input">
							<label for="offer4">
								<input type="checkbox" id="offer4" checked="checked"> Excess/Security Deposit
							</label>
						</div>
						<div class="checkbox_input">
							<label for="offer5">
								<input type="checkbox" id="offer5"> Baby Seat: $23/Day
							</label>
						</div>
				<div class="checkbox_input">
					<label for="offer6">
						<input type="checkbox" id="offer6"> Breakdown Assistance
					</label>
				</div>
			</div>
		</div>
	</div>

	<hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

	<div class="reservation_customer_details">
		<h4 class="input_title" data-aos="fade-up" data-aos-delay="100">Customer Details:</h4>
		<ul class="customer_gender ul_li clearfix" data-aos="fade-up" data-aos-delay="300">
			<li>
				<div class="checkbox_input">
					<label for="mr"><input type="radio" id="mr" name="gender"> Mr.</label>
				</div>
			</li>
			<li>
				<div class="checkbox_input">
					<label for="ms"><input type="radio" id="ms" name="gender"> Ms.</label>
				</div>
			</li>
		</ul>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="400">
					<input type="text" name="firstname" placeholder="First Name">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="500">
					<input type="text" name="lastname" placeholder="Last Name">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="600">
					<input type="text" name="email" placeholder="E-mail adress">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="700">
					<input type="text" name="tel" placeholder="Phone Number">
				</div>
			</div>
		</div>
		<div class="form_item" data-aos="fade-up" data-aos-delay="800">
			<textarea name="information" placeholder="Additional information (Optional)"></textarea>
		</div>
		<div data-aos="fade-up" data-aos-delay="100">
			<a class="terms_condition" href="#!"><i class="fas fa-info-circle mr-1">

			</i> You must be at least 21 years old to rent this car. Collision Damage Waiver (CDW)</a>
		</div>
		<hr data-aos="fade-up" data-aos-delay="200">
		<div class="row align-items-center justify-content-lg-between">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
				<a class="bonus_program" href="#!"><i class="far fa-angle-left mr-1"></i> Bonus Program</a>
				<div class="checkbox_input mb-0">
					<label for="accept">
						<input type="checkbox" id="accept"> I accept all information and Payments etc
					</label>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
				<button type="submit" class="custom_btn bg_default_red text-uppercase">Reservation Now
					<img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
				</button>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>
</section>



@endsection
