@extends('driver.master')

@section('title')

booking-single-view

@stop
@section('content')


  <div class="row " style="color:#000000; text-aline:justify">
      <div class="col-md-8 col-md-offset-2">
        <div class="card text-center">
            <div class="card-header bg-info" style="padding-top: 15px; padding-bottom:10px;">
              <p class="text-light">Booking All Info</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-justify">
                    <tr>
                        <th scope="col">Car Name</th>
                        <td>{{ $booking->bookingCar->name}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Car Number Plate</th>
                        <td>{{ $booking->bookingCar->nPlate}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Car Engine Number</th>
                        <td>{{ $booking->bookingCar->car_engine}}</td>
                    </tr>
                    <tr>
                        <th>Car  Image</th>
                        <td>
                            <img width="100px" class="img-thumbnail" src="{{ url('/uploads/cars/'.$booking->bookingCar->image) }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Booking Date</th>
                        <td>{{ date("Y-M-d",strtotime($booking->from_date)) }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Return Date</th>
                        <td>{{  date("Y-M-d",strtotime($booking->to_date))  }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Total Days</th>
                        <td>
                            @php
                             $daysCalculation = (strtotime($booking->to_date)-strtotime($booking->from_date));
                             $daysCalculation = round(($daysCalculation / (60 * 60 * 24))+1);
                            echo $daysCalculation." Days";
                         @endphp
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Price/Day</th>
                        <td>{{ $booking->price_per_day }} BDT</td>
                    </tr>
                    <tr>
                        <th scope="col">Car Disscount Amount</th>
                        <td>{{ $booking->bookingCar->discount_offer.'.00' }} BDT</td>
                    </tr>
                    <tr>
                        <th scope="col">Insurance Fee</th>
                        <td>{{ $booking->insurance_fee.'.00' }} BDT</td>
                    </tr>
                    <tr>
                        <th scope="col">Total</th>
                        <td>{{ $booking->total_price}} BDT</td>
                    </tr>
                    <tr>
                        <th scope="col">Customer/User Name</th>
                        <td>{{ $booking->bookingUser->name}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Customer Email</th>
                        <td>{{ $booking->bookingUser->email}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Customer Phone</th>
                        <td>{{ '+880-'.$booking->bookingUser->phone}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Customer Address</th>
                        <td>{{ $booking->bookingUser->address}} </td>
                    </tr>

                    <tr>
                        <th scope="col">Customer Message</th>
                        <td>{{ $booking->details}} </td>
                    </tr>
                    <tr>
                        <th scope="col">Booking Status</th>
                        <td>{{ucfirst($booking->status)}} </td>
                    </tr>

                </table>

            </div>
            <div class="card-footer bg-secondary text-left">
                <a href="{{ route('booking.information') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
