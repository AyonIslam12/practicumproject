@extends('backend.master')

@section('title')

booking-single-view

@stop
@section('content')

  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Booking Single Info.</p>
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
                        <td>{{ $booking->price_per_day }}.00 Tk. </td>
                    </tr>
                    <tr>
                        <th scope="col">Car Disscount Amount</th>
                        <td>{{ $booking->bookingCar->discount_offer.'.00' }} Tk.</td>
                    </tr>
                    <tr>
                        <th scope="col">Insurance Fee</th>
                        <td>{{ $booking->insurance_fee.'.00' }} Tk.</td>
                    </tr>
                    <tr>
                        <th scope="col">Total</th>
                        <td>{{ $booking->total_price}} Tk.</td>
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

                    <tr>
                        <th scope="col">Driver Name</th>
                        <td>@if ($booking->driver_id != NULL )
                        <span>{{ ucfirst($booking->bookingDriver->name)}}</span>
                        @else
                        <span>Not Added Yet.</span>
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Driver Email</th>
                        <td>@if ($booking->driver_id != NULL )
                        <span>{{ ucfirst($booking->bookingDriver->email)}}</span>
                        @else
                        <span>Not Added Yet.</span>
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Driver Contact Number</th>
                        <td>@if ($booking->driver_id != NULL )
                        <span>+880-{{ $booking->bookingDriver->phone}}</span>
                        @else
                        <span>Not Added Yet.</span>
                        @endif
                        </td>
                    </tr>



                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.booking.manage') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
