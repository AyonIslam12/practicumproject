@extends('frontend.master')

@section('title')
All-Cars
@stop


@section('content')
<!--Here-->
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_01.jpg') }}">
        <div class="overlay ">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Our cars</h1>
        </div>
    </div>

</section>

<section class="feature_section sec_ptb_100 clearfix">
	<div class="container">
        <div class="row justify-content-center">
		<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
			<div class="section_title  text-center" data-aos="fade-up" data-aos-delay="100">
				<h2 class="title_text mb_15">
					<span>Select Your Car From Here</span>
				</h2>


			</div>
		</div>
	</div>
    <!--Search Result Show-->
    <div class="row">
        <div class="col-md-6 col-sm-12">
    @if(isset($search))
    <p class="bg-secondary p-3 text-light">
        Your searching results for :-
        <span class="text-warning font-weight-bolder">'{{ ' '.$search }}'</span>
         , <span class="text-white font-weight-bold"> found ( {{ count($cars) }} results )</span>
        </p>
    @endif

    </div>

    </div>
    <hr  data-aos="fade-up" data-aos-delay="100">
	<div class="feature_vehicle_filter element-grid clearfix">
        @foreach ($cars as $car )


		<div class="element-item sedan" data-category="sedan">
			<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
				<h3 class="item_title mb-0 bg-secondary"><a class="text-light" href="#!">{{ $car->name }}</a>
				</h3>
				<div class="item_image position-relative border">
					<a class="image_wrap" href="#!">
						<img style="max-height: 220px" src="{{ asset('uploads/cars/'.$car->image)}}" alt="image_not_found">
					</a>

                    <a class="btn btn-outline-info m-1" href="{{ route('website.car.singlecar',$car->id) }}">
                        <span>View</span>
                    </a>
                    <a class="btn btn-outline-primary m-1" href="{{ route('website.car.booking.form',$car->id) }}">
                        <span class="">Book Car</span>
                    </a>

				</div>
				<ul class="info_list ul_li_center text-light font-weight-bolder bg-secondary clearfix">
					<li>{{ $car->carBrand->brand }}</li>
					<li><span class="text-warning">{{ $car->price_per_day.' . 00 '}}</span> BDT/Day</li>
					{{-- <li>{{ $car->model }}</li> --}}
					<li>{{'Seats: '. $car->seats }}</li>

				</ul>
			</div>
		</div>
        @endforeach

	</div>

    <div class="row">
        <div class="col-12 ">
           <div class="d-felx justify-content-left">

               {{ $cars->links() }}

           </div>

        </div>

    </div>
</div>
<hr data-aos="fade-up" data-aos-delay="100">

</section>


<!--end-->


@endsection
