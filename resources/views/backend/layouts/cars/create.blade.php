@extends('backend.master')

@section('title')
car-create

@stop

@section('content')
<div class="row">
    <div class="col-6 offset-3 bg-secondary">


        <h3 class="text-center text-light py-4">Car Add Form</h3>
        <form action="{{ route('admin.car.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="car_name"><span class="text-light">Car Name</span></label>
                <input type="text" class="form-control" id="car_name" name="car_name" value=""  placeholder="Enter Car Name">
            </div>
            <div class="form-group">
                <label for="car_brand"><span class="text-light">Car Brand</span></label>
                <input type="text" class="form-control" id="car_brand" name="car_brand" value=""  placeholder="Enter Car Brand Name">
            </div>
            <div class="form-group">
                <label for="car_model"><span class="text-light">Car Model</span></label>
                <input type="text" class="form-control" id="car_model" name="car_model" value=""  placeholder="Enter Car Model Name">
            </div>
            <div class="form-group">
                <label for="car_color"><span class="text-light">Car Color</span></label>
                <input type="text" class="form-control" id="car_color" name="car_color" value=""  placeholder="Enter Car Color">
            </div>
            <div class="form-group">
                <label for="sit_capacity"><span class="text-light">Car Sit Capacity</span></label>
                <input type="number" class="form-control" id="sit_capacity" name="sit_capacity" value=""  placeholder="Enter Car Sit Capacity">
            </div>
            <div class="form-group">
                <label for="n_plate"><span class="text-light">Car Number Plate</span></label>
                <input type="text" class="form-control" id="n_plate" name="n_plate" value=""  placeholder="Enter Car Plate Number">
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio text-center py-4">
                    <button type="submit" class="btn btn-success" > Add Car</button>
                </div>
            </div>
          </form>

    </div>
</div>

@stop
