@extends('backend.master')


@section('title')
booking-create
@stop


@section('content')

<div class="row">
    <div class="col-6 offset-3 bg-secondary">


        <h3 class="text-center text-light py-4">Booking Add Form</h3>

        <div class="row">
        <div class="col-md-12">
        @if(session('message'))
            <div class="text-center alert alert-{{ session('type') }}">
            <p class="text-center text-bolder">{{ session('message') }}</p>
            </div>
        @endif
        </div>
        </div>
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
                <label for="user_id"><span class="text-light">Select User</span></label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">Select</option>
                    @foreach($users as $key => $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach


                </select>
            </div>

            <div class="form-group">
                <label for="from_date"><span class="text-light">Form Date</span></label>
                <input type="date" class="form-control" id="from_date" name="from_date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"  placeholder="Enter Booking Form Date">
            </div>
            <div class="form-group">
                <label for="to_date"><span class="text-light">To Date</span></label>
                <input type="date" class="form-control" id="to_date" name="to_date" value=""  placeholder="Enter Booking To Date">
                 @error('to_date') <span class="text-warning font-weight-bolder font-italic d-block">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="details"><span class="text-light">To Date</span></label>
                <textarea name="details" placeholder="Additional information (Optional)" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="status" ><span class="text-light"> Status</span></label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="active" name="status" value="active" class="custom-control-input" >
                    <label class="custom-control-label" for="active"><span class="text-light"> Active</span></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="inactive" name="status" value="inactive" class="custom-control-input" >
                    <label class="custom-control-label" for="inactive"><span class="text-light"> Inactive</span></label>
                </div>

                @error('status') <span class="text-warning font-weight-bolder font-italic d-block">{{ $message }}</span> @enderror
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
