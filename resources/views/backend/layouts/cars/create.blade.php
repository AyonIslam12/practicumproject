@extends('backend.master')

@section('title')
car-create

@stop

@section('content')
<div class="row">
    <div class="col-8 offset-2 bg-secondary">


        <h3 class="text-center text-light py-4">Car Add Form</h3>
        <form action="{{ route('admin.car.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="name"><span class="text-light">Car Name</span></label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  placeholder="Enter Car Name">
                @error('name') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="brand_id"><span class="text-light">Select Brand</span></label>
                <select name="brand_id" id="brand_id" class="form-control">
                    <option value="">Select</option>
                    @foreach($brands as $key => $brand)
                    <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="model"><span class="text-light">Car Model</span></label>
                <input type="text" class="form-control  @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}"  placeholder="Enter Car Model Name">
                 @error('model') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="model_year"><span class="text-light"> Model Year</span></label>
                <input type="date" class="form-control  @error('model_year') is-invalid @enderror" id="model_year" name="model_year" value="{{ old('model_year') }}"  placeholder="Enter Car Model Name">
                 @error('model_year') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="image"><span class="text-light">Uploads Car Image</span></label>
                <input type="file" class="form-control" id="image" name="image" value="">
            </div>
            <div class="form-group">
                <label for="color"><span class="text-light">Car Color</span></label>
                <input type="text" class="form-control  @error('color') is-invalid @enderror" id="color" name="color" value="{{ old('color') }}"  placeholder="Enter Car Color">
                 @error('color') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="price_per_day"><span class="text-light">Car Price/Day</span></label>
                <input type="number" class="form-control  @error('price_per_day') is-invalid @enderror" id="price_per_day" name="price_per_day" value="{{ old('price_per_day') }}"  placeholder="Enter Car Price">
                 @error('price_per_day') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="air_condition"><span class="text-light">Air Condition</span></label>
                <input type="number" class="form-control" id="air_condition" name="air_condition" value="{{ old('air_condition') }}"  placeholder="Enter(1) if have Air Condition">

            </div>
            <div class="form-group">
                <label for="power_deadlock"><span class="text-light">Power Deadlock</span></label>
                <input type="number" class="form-control  " id="power_deadlock" name="power_deadlock" value="{{ old('air_condition') }}"  placeholder="Enter(1) if have Power Deadlock">

            </div>
            <div class="form-group">
                <label for="anti_lockbraking"><span class="text-light">Anti Lock Braking</span></label>
                <input type="number" class="form-control" id="anti_lockbraking" name="anti_lockbraking" value="{{ old('anti_lockbraking') }}"  placeholder="Enter(1) if have Anti Lock Braking">

            </div>
            <div class="form-group">
                <label for="brake_assist"><span class="text-light">Brake Assist</span></label>
                <input type="number" class="form-control  " id="brake_assist" name="brake_assist" value="{{ old('brake_assist') }}"  placeholder="Enter(1) if have Brake Assist">

            </div>
            <div class="form-group">
                <label for="power_steering"><span class="text-light">Power Steering</span></label>
                <input type="number" class="form-control  " id="power_steering" name="power_steering" value="{{ old('power_steering') }}"  placeholder="Enter(1) if have Power Steering">

            </div>
            <div class="form-group">
                <label for="cd_player"><span class="text-light">CD Player</span></label>
                <input type="number" class="form-control  @error('cd_player') is-invalid @enderror" id="cd_player" name="cd_player" value="{{ old('cd_player') }}"  placeholder="Enter(1) if have CD Player ">

            </div>
            <div class="form-group">
                <label for="central_looking"><span class="text-light">Central Looking</span></label>
                <input type="number" class="form-control" id="central_looking" name="central_looking" value="{{ old('central_looking') }}"  placeholder="Enter(1)if have Car Central Lookin ">

            </div>
            <div class="form-group">
                <label for="crash_sensor"><span class="text-light">Crash Sensor</span></label>
                <input type="number" class="form-control " id="crash_sensor" name="crash_sensor" value="{{ old('crash_sensor') }}"  placeholder="Enter(1) if have Crash Sensor ">

            </div>
            <div class="form-group">
                <label for="mileage"><span class="text-light">Car Mileage</span></label>
                <input type="text" class="form-control  @error('mileage') is-invalid @enderror" id="mileage" name="mileage" value="{{ old('mileage') }}"  placeholder="Enter Car Mileage">
                 @error('mileage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="transmission"><span class="text-light">Car Transmission </span></label>
                <input type="text" class="form-control  @error('transmission') is-invalid @enderror" id="transmission" name="transmission" value="{{ old('transmission') }}"  placeholder="Enter Car Transmission Type">
                 @error('transmission') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="seats"><span class="text-light">Car seats Capacity </span></label>
                <input type="number" class="form-control  @error('seats') is-invalid @enderror" id="seats" name="seats" value="{{ old('seats') }}"  placeholder="Enter Car Seat Numbers">
                 @error('seats') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="luggage"><span class="text-light">Car Luggage </span></label>
                <input type="text" class="form-control  @error('luggage') is-invalid @enderror" id="luggage" name="luggage" value="{{ old('luggage') }}"  placeholder="Enter Car Luggage">
                 @error('luggage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fuel"><span class="text-light">Car Fuel </span></label>
                <input type="text" class="form-control  @error('fuel') is-invalid @enderror" id="fuel" name="fuel" value="{{ old('fuel') }}"  placeholder="Enter Car Fuel">
                 @error('fuel') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="decs"><span class="text-light">Car Dscription </span></label>
                <textarea name="decs" id="decs" class="form-control" cols="" rows="8">Enter Your Car Information...</textarea>
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
                    <button type="submit" class="btn btn-success" > Add Car</button>
                </div>
            </div>
          </form>

    </div>
</div>

@stop
