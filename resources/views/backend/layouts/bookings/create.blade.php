@extends('backend.master')


@section('title')
booking-create
@stop


@section('content')

<div class="row">
    <div class="col-6 offset-3 bg-secondary">


        <h3 class="text-center text-light py-4">Booking Add Form</h3>
        <form action="{{ route('admin.booking.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="car_id"><span class="text-light">Select Car</span></label>
                <select name="car_id" id="car_id" class="form-control">
                    <option value="">Select</option>
                    @foreach($cars as $key => $car)
                    <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endforeach


                </select>
            </div>

            <div class="form-group">
                <label for="booking_time"><span class="text-light">Booking Time</span></label>
                <input type="time" class="form-control" id="booking_time" name="booking_time" value=""  placeholder="Enter Booking Time">
            </div>
            <div class="form-group">
                <label for="booking_date"><span class="text-light">Booking Date</span></label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" value=""  placeholder="Enter Booking Date">
            </div>
            <div class="form-group">
                <label for="return_time"><span class="text-light">Return  Time</span></label>
                <input type="time" class="form-control" id="return_time" name="return_time" value=""  placeholder="Enter Return Time">
            </div>
            <div class="form-group">
                <label for="return_date"><span class="text-light">Return  Date</span></label>
                <input type="date" class="form-control" id="return_date" name="return_date" value=""  placeholder="Enter Return Date">
            </div>
            <div class="form-group">
                <label for="booking_advanced"><span class="text-light">Advanced Balance</span></label>
                <input type="number" class="form-control" id="booking_advanced" name="booking_advanced" value=""  placeholder="Enter Advanced Balance">
            </div>
            <div class="form-group">
                <label for="booking_total"><span class="text-light">Total Balance</span></label>
                <input type="number" class="form-control" id="booking_total" name="booking_total" value=""  placeholder="Enter Total Balance">
            </div>

            <div class="form-group">
                <div class="custom-control custom-radio text-center py-4">
                    <button type="submit" class="btn btn-success" > Add Booking</button>
                </div>
            </div>
          </form>

    </div>
</div>
@stop
