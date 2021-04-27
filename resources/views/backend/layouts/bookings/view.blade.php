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
                <table class="table table-bordered table-striped">
                    <tr>
                        <th scope="col">Car Name</th>
                        <td>{{ $booking->bookingCar->name}}</td>
                    </tr>
                    <tr>
                        <th>Car  Image</th>
                        <td>
                            <img width="100px" class="img-thumbnail" src="{{ url('/uploads/cars/'.$booking->bookingCar->image) }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">From Date</th>
                        <td>{{ date("Y-M-d",strtotime($booking->from_date)) }}</td>
                    </tr>
                    <tr>
                        <th scope="col">To Date</th>
                        <td>{{  date("Y-M-d",strtotime($booking->to_date))  }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Price/Day</th>
                        <td>{{ $booking->price_per_day }} BDT</td>
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
                        <th scope="col">Status</th>
                        <td>{{ucfirst($booking->status)}} </td>
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
