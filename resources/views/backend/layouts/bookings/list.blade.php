@extends('backend.master')

@section('title')
booking-list
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <h3 class="text-center font-weight-bold text-uppercase text-info pt-2">Booking List Table</h3>

        <a href="{{ route('admin.booking.create') }}" type="button" class="btn btn-secondary mb-1"><span class="light">Add New Booking</span></a>

        <table class="table table-bordered">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        @if(session('success'))
                        <div class="text-center alert alert-success">
                            <p class="text-center font-weight-bolder pt-2">{{ session('success') }}</p>
                        </div>
                        @endif

                    </div>

                </div>
            <thead class="bg-info">
              <tr class="text-light">
                <th scope="col">Sl </th>
                <th scope="col">Booking Time</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Return Time</th>
                <th scope="col">Return Date</th>
                <th scope="col">Advanced Amounts</th>
                <th scope="col">Total Amounts</th>
                <th scope="col">Car Name</th>
                <th scope="col">Car Brand</th>
                <th scope="col">Car Image</th>
                <th class="text-center" scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $key=>$booking )


              <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $booking->booking_time }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>{{ $booking->return_time }}</td>
                <td>{{ $booking->return_date }}</td>
                <td>{{ $booking->booking_advanced.' Tk.' }}</td>
                <td>{{ $booking->booking_total.' TK.' }}</td>
                <td>{{ $booking->bookingCar->name }}</td>
                <td>{{ $booking->bookingCar->brand }}</td>
                <td><img width="70px" src="{{ url('/uploads/cars/'.$booking->bookingCar->image) }}" alt=""></td>
                <td class="text-center d-flex">
                    <a class="btn btn-info btn-sm mx-1" href="{{ route('admin.booking.show',$booking->id) }}">View</a>
                    <a class="btn btn-success btn-sm " href="#">Edit</a>
                    <form action="{{ route('admin.booking.delete',$booking->id) }}" method="post" class="d-inline m-0">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm  mx-1 delete">Delete</button>

                      </form>
                </td>

              </tr>
              @endforeach

            </tbody>
          </table>

    </div>

</div>



@endsection
