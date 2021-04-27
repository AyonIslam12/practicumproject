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
    <!--Validation Message-->
    <div class="row">
        <div class="col-md-12">
     @if(session('message'))
        <div class="text-center alert alert-{{ session('type') }}">
            <p class="text-center text-bolder">{{ session('message') }}</p>
        </div>
    @endif
        </div>
    </div>
	<div class="reservation_form">
		<form action="{{ route('website.car.booking') }}" method="POST">
            @csrf
			<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="form_item" data-aos="fade-up" data-aos-delay="200">
					<h4 class="input_title">From Date</h4>
					<input type="hidden" name="car_id" value="{{ $car->id }}">
					<input type="date" name="from_date"  value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"  class="form-control @error('from_date') is-invalid @enderror">
                    @error('from_date') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
				</div>
			</div>


				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="form_item" data-aos="fade-up" data-aos-delay="500">
						<h4 class="input_title">To Date</h4>
						<input type="date" name="to_date"  value="{{ old('to_date') }}" class="form-control @error('to_date') is-invalid @enderror">
                        @error('to_date') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
                    </div>
					</div>
				</div>

	<hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

	<div class="reservation_customer_details">
		<div class="form_item" data-aos="fade-up" data-aos-delay="800">
			<textarea name="details" placeholder="Additional information (Optional)"></textarea>
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
