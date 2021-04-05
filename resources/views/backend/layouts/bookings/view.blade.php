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
                        <th>Booking Time</th>
                        <td>{{ $books->booking_time }}</td>
                    </tr>
                    <tr>
                        <th>Booking Date</th>
                        <td>{{ $books->booking_date }}</td>
                    </tr>
                    <tr>
                        <th>Return Time</th>
                        <td>{{ $books->return_time }}</td>
                    </tr>
                    <tr>
                        <th>Return Date</th>
                        <td>{{ $books->return_date }}</td>
                    </tr>
                    <tr>
                        <th>Booking Time</th>
                        <td>{{ $books->booking_advanced.' TK' }}</td>
                    </tr>
                    <tr>
                        <th>Booking Time</th>
                        <td>{{ $books->booking_total.'.00'.' TK' }}</td>
                    </tr>
                    <tr>
                        <th>Car  Name</th>
                        <td>{{ $books->bookingCar->name }}</td>
                    </tr>
                    <tr>
                        <th>Car  Brand</th>
                        <td>{{ $books->bookingCar->brand }}</td>
                    </tr>
                    <tr>
                        <th>Car  Image</th>
                        <td>
                            <img width="100px" class="img-thumbnail" src="{{ url('/uploads/cars/'.$books->bookingCar->image) }}" alt="">
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
