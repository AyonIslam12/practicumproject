@extends('backend.master')

@section('title')
booking-list
@endsection

@section('content')


 <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">

                <h3 class="text-center font-weight-bold text-uppercase text-dark pt-2">Bookings  Table</h3>

                <!--validation message-->
            <div class="row">
                <div class="col-md-12">
            @if(session('message'))
                <div class="text-center alert alert-{{ session('type') }}">
                <p class="text-center text-bolder">{{ session('message') }}</p>
                </div>
            @endif
            </div>
            </div>
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <div class="adv-table">
                    <a href="{{ route('admin.booking.create') }}" type="button" class="btn btn-secondary mb-1">
                        <span class="light">Add New</span>
                    </a>
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th scope="col">Sl </th>
                                <th scope="col">Car Name</th>
                                <th scope="col">User</th>
                                <th scope="col">From Date</th>
                                <th scope="col">To Date</th>
                                <th scope="col">Price/Day</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $key=>$booking )


                            <tr>
                              <th scope="row">{{ $key+1 }}</th>
                              <td>{{ $booking->bookingCar->name}}</td>
                              <td>{{ $booking->bookingUser->name}}</td>
                              <td>{{ date("Y-M-d",strtotime($booking->from_date)) }}</td>
                              <td>{{  date("Y-M-d",strtotime($booking->to_date))  }}</td>
                              <td>{{ $booking->price_per_day }} BDT.</td>
                              <td>{{ $booking->total_price}} BDT.</td>
                              <td>{{ Str::ucfirst($booking->status) }}</td>
                              <td class="text-center">
                                  <a class="btn btn-info btn-sm mx-1" href="{{ route('admin.booking.show',$booking->id) }}"><i class="fas fa-eye text-dark"></i></a>
                                  <a class="btn btn-success btn-sm " href="#"><i class="far fa-edit text-dark"></i></a>
                                 <a type="submit" class="btn btn-danger btn-sm  mx-1 delete" href="{{ route('admin.booking.delete',$booking->id) }}"><i class="fas fa-trash text-dark"></i></a>


                              </td>

                            </tr>
                            @endforeach


                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- page end-->





@endsection
