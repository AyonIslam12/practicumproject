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
    <a class="btn btn-outline-dark" href="{{ route('website.car.list') }}"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
<div class="car_choose_carousel mb_30 clearfix">
    <div class="thumbnail_carousel" data-aos="fade-up" data-aos-delay="100">
        <div class="item">
            <div class="item_head">
                <h4 class="item_title mb-0">{{ $car->name }}</h4>
                <h4 class="item_title mb-0 text-right"><span class="small muted">Brand: </span>{{ $car->carBrand->brand }}</h4>

            </div>
            <img class="border" src="{{ asset('uploads/cars/'.$car->image)}}" alt="image_not_found">

            <ul class="btns_group ul_li_center clearfix">
                @if($car->discount_offer <= 0)
                <li>
                    <span class="custom_btn btn_width bg_default_blue text-k"> {{ $car->price_per_day.' . 00 BDT.' }}/Day</span>
                </li>

                @else
                <li>
                    <span class="custom_btn btn_width bg_default_blue"><del style="color: red; font-weight:bolder"><span class="text-warning">{{ $car->price_per_day.' . 00 TK.' }}/Day</span></del>{{ $car->price_per_day -$car->discount_offer.'. 00 TK '  }}/Day </span>
                </li>

                @endif
                <li>
                    <a href="{{ route('website.car.booking.form',$car->id) }}" class="custom_btn btn_width bg_default_red text-uppercase">
                        Book A Car
                        <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="car_choose_content">

        <div class="row py-2">
            <div class="col-md-6">
                <h1 class="text-secondary text-center">Car Overview</h1>
                <table class="table table-bordered table-striped text-left class">

                    <tr>
                        <tr>
                            <th>Car Model :</th>
                            <td class="text-center text-muted text-info">{{ $car->model }}</td>

                        </tr>
                        <tr>
                            <th>Car Engine Number :</th>
                            <td class="text-center text-muted text-info">{{ $car->car_engine }}</td>

                        </tr>
                        <tr>
                            <th>Car Color:</th>
                            <td class="text-center text-muted text-info">{{ $car->color }}</td>


                        </tr>
                        <tr>
                            <th>Car Capacity:</th>
                            <td class="text-center text-muted text-info">{{ $car->seats.' Seats' }}</td>


                        </tr>
                        <tr>
                            <th>Car Luggage: </th>
                            <td class="text-center text-muted text-info">{{ $car->luggage.' Luggage' }}</td>


                        </tr>
                        <tr>
                            <th>Fuel Type:</th>
                            <td class="text-center text-muted text-info">{{ $car->fuel }}</td>


                        </tr>
                        <tr>
                            <th>Mileage:</th>
                            <td class="text-center text-muted text-info">{{ $car->mileage.' KM/H' }}</td>


                        </tr>
                        <tr>
                            <th>Transmission:</th>
                            <td class="text-center text-muted text-info">{{ $car->transmission }}</td>


                        </tr>
                        <tr>
                            <th>Car Descrition</th>
                            <td class=" text-muted text-info text-justify">{{ $car->decs }}</td>


                        </tr>
                    </tr>

                </table>

            </div>
            <div class="col-md-6">
                <h1 class="text-secondary text-center">Accessories</h1>
                <table class="table table-bordered table-striped text-left class">

                    <tr>
                        <tr>
                            <th>Car Air condition</th>
                            @if($car->air_condition == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Power Deadlock</th>
                            @if($car->power_deadlock == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Anti Lock Braking</th>
                            @if($car->anti_lockbraking == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Brake Assist</th>
                            @if($car->brake_assist == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Power Steering</th>
                            @if($car->power_steering == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>CD Player</th>
                            @if($car->cd_player == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Central Locking</th>
                            @if($car->central_looking == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></i></td>
                            @endif

                        </tr>
                        <tr>
                            <th>Crash Sensor</th>
                            @if($car->crash_sensor == 1)
                            <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                            @else
                            <td class="text-center" ><i class="fas fa-window-close text-danger"></i></td>
                            @endif

                        </tr>
                    </tr>

                </table>

            </div>

    </div>


        <hr data-aos="fade-up" data-aos-delay="300">

     <div class="rent_details_info">
        <h4 class="list_title text-center" data-aos="fade-up" data-aos-delay="100">Our Insurance Details:</h4>
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table table-bordered table-striped text-justify ">
                @foreach ($insurances as $insurance )


                <tr>
                    <th >Insurance Name:</th>
                    <td >{{ $insurance->name }}</td>
                 </tr>
                <tr>
                     <th >Company Name:</th>
                     <td class="">{{ $insurance->company_name }}</td>
                </tr>
                <tr>
                    <th >Insurance Coverage:</th>
                     <td style="width:700px" class="">{{ $insurance->coverage }}</td>
                </tr>
                 <tr>
                    <th >Insurance Fee: </th>
                    <td class="">{{ $insurance->insurance_fee }}.00 BDT.</td>
                 </tr>
                 @endforeach
     </table>
</div>

</div>
</div>

<hr data-aos="fade-up" data-aos-delay="100">



</div>
</div>
</div>
</div>
</div>






@endsection
