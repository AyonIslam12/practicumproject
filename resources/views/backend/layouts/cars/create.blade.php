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
                <label for="name"><span class="text-light">Car Name</span></label>
                <input type="text" class="form-control" id="name" name="name" value=""  placeholder="Enter Car Name">
            </div>
            <div class="form-group">
                <label for="brand"><span class="text-light">Car Brand</span></label>
                <input type="text" class="form-control" id="brand" name="brand" value=""  placeholder="Enter Car Brand Name">
            </div>
            <div class="form-group">
                <label for="model"><span class="text-light">Car Model</span></label>
                <input type="text" class="form-control" id="model" name="model" value=""  placeholder="Enter Car Model Name">
            </div>
            <div class="form-group">
                <label for="image"><span class="text-light">Uploads Car Image</span></label>
                <input type="file" class="form-control" id="image" name="image" value="">
            </div>
            <div class="form-group">
                <label for="color"><span class="text-light">Car Color</span></label>
                <input type="text" class="form-control" id="color" name="color" value=""  placeholder="Enter Car Color">
            </div>
            <div class="form-group">
                <label for="price"><span class="text-light">Car Price</span></label>
                <input type="text" class="form-control" id="price" name="price" value=""  placeholder="Enter Car Price">
            </div>
            <div class="form-group">
                <label for="mileage"><span class="text-light">Car Mileage</span></label>
                <input type="text" class="form-control" id="mileage" name="mileage" value=""  placeholder="Enter Car Mileage">
            </div>
            <div class="form-group">
                <label for="transmission"><span class="text-light">Car Transmission </span></label>
                <input type="text" class="form-control" id="transmission" name="transmission" value=""  placeholder="Enter Car Transmission Type">
            </div>
            <div class="form-group">
                <label for="seats"><span class="text-light">Car seats Capacity </span></label>
                <input type="number" class="form-control" id="seats" name="seats" value=""  placeholder="Enter Car Seat Numbers">
            </div>
            <div class="form-group">
                <label for="luggage"><span class="text-light">Car Luggage </span></label>
                <input type="text" class="form-control" id="luggage" name="luggage" value=""  placeholder="Enter Car Luggage">
            </div>
            <div class="form-group">
                <label for="fuel"><span class="text-light">Car Fuel </span></label>
                <input type="text" class="form-control" id="fuel" name="fuel" value=""  placeholder="Enter Car Fuel">
            </div>
            <div class="form-group">
                <label for="decs"><span class="text-light">Car Dscription </span></label>
                <textarea name="decs" id="decs" class="form-control" cols="" rows="8">Enter Your Car Information...</textarea>
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
