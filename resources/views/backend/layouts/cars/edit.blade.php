@extends('backend.master')

@section('title')
car-edit
@stop

@section('content')
<div class="row">

    <div class="col-8 offset-2  bg-info">
        <div class="card bg-secondary">
            <div class="card-header bg-info  text-light text-center">
                Upadte car  Info
            </div>
           {{--  @if($errors->any())
            <div class="alert alert-danger mx-5 mt-2 mb-0">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif--}}

        @if(session('message'))
        <div class="text-center alert alert-{{ session('type') }}">
            <p class="text-center text-bolder">{{ session('message') }}</p>
        </div>
        @endif

           <form action="{{ route('admin.car.update',$car->id) }}" method="post" enctype="multipart/form-data">
             @csrf
               @method('PUT')
               <div class="card-body ">
                <div class="form-group">
                    <label for="name"><span class="text-light"> Name</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $car->name }}">
                    @error('name') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="brand_id"><span class="text-light">Select Brand</span></label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="">Select</option>
                        @foreach($brands as  $brand)
                        <option value="{{ $brand->id }}" {{ $car->brand_id == $brand->id ? 'selected' :'' }}>{{ $brand->brand }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="model"><span class="text-light">Car Model</span></label>
                    <input type="text" class="form-control  @error('model') is-invalid @enderror" id="model" name="model" value="{{ $car->model }}">
                     @error('model') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="nPlate"><span class="text-light">Car Number Plate</span></label>
                    <input type="text" class="form-control  @error('nPlate') is-invalid @enderror" id="nPlate" name="nPlate" value="{{ $car->nPlate }}">
                     @error('nPlate') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="model_year"><span class="text-light">Car Model Year</span></label>
                    <input type="date" class="form-control  @error('model_year') is-invalid @enderror" id="model_year" name="model_year" value="{{ $car->model_year }}">
                     @error('model_year') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="image"><span class="text-light">Uploads Car Image</span></label>
                    <input type="file" class="form-control" id="image" name="image" >
                </div>
                <div class="form-group">
                    <label for="color"><span class="text-light">Car Color</span></label>
                    <input type="text" class="form-control  @error('color') is-invalid @enderror" id="color" name="color" value="{{ $car->color }}">
                     @error('color') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="price_per_day"><span class="text-light">Car Price</span></label>
                    <input type="text" class="form-control  @error('price_per_day') is-invalid @enderror" id="price_per_day" name="price_per_day" value="{{ $car->price_per_day }}">
                     @error('price_per_day') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="discount_offer"><span class="text-light">Disscount Amount</span></label>
                    <input type="text" class="form-control" id="discount_offer" name="discount_offer" value="{{$car->discount_offer }}"  placeholder="Enter Car Discount Amount If Have">

                </div>
                <div class="form-group">
                    <label for="air_condition"><span class="text-light">Car Air Condition</span></label>
                    <input type="number" class="form-control  "  id="air_condition" name="air_condition" value="{{ $car->air_condition }}">

                </div>
                <div class="form-group">
                    <label for="power_deadlock"><span class="text-light">Car Power Deadlock</span></label>
                    <input type="number" class="form-control  " id="power_deadlock" name="power_deadlock" value="{{ $car->power_deadlock }}">

                </div>
                <div class="form-group">
                    <label for="anti_lockbraking"><span class="text-light">Anti Lock Braking</span></label>
                    <input type="number" class="form-control  " id="anti_lockbraking" name="anti_lockbraking" value="{{ $car->anti_lockbraking }}">
                </div>
                <div class="form-group">
                    <label for="brake_assist"><span class="text-light">Brake Assist</span></label>
                    <input type="number" class="form-control  " id="brake_assist" name="brake_assist" value="{{ $car->brake_assist }}">
                </div>
                <div class="form-group">
                    <label for="power_steering"><span class="text-light">Power Steering</span></label>
                    <input type="number" class="form-control  " id="power_steering" name="power_steering" value="{{ $car->power_steering }}">
                </div>
                <div class="form-group">
                    <label for="cd_player"><span class="text-light">CD Player</span></label>
                    <input type="number" class="form-control  " id="cd_player" name="cd_player" value="{{ $car->cd_player }}">
                </div>
                <div class="form-group">
                    <label for="central_looking"><span class="text-light">Central Looking</span></label>
                    <input type="number" class="form-control  " id="cd_player" name="central_looking" value="{{ $car->central_looking }}">
                </div>
                <div class="form-group">
                    <label for="crash_sensor"><span class="text-light">Central Looking</span></label>
                    <input type="number" class="form-control  " id="cd_player" name="crash_sensor" value="{{ $car->crash_sensor }}">
                </div>

                <div class="form-group">
                    <label for="mileage"><span class="text-light">Car Mileage</span></label>
                    <input type="text" class="form-control  @error('mileage') is-invalid @enderror" id="mileage" name="mileage" value="{{ $car->mileage }}">
                     @error('mileage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="transmission"><span class="text-light">Car Transmission </span></label>
                    <input type="text" class="form-control  @error('transmission') is-invalid @enderror" id="transmission" name="transmission" value="{{ $car->transmission }}">
                     @error('transmission') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="seats"><span class="text-light">Car seats Capacity </span></label>
                    <input type="number" class="form-control  @error('seats') is-invalid @enderror" id="seats" name="seats" value="{{ $car->seats }}">
                     @error('seats') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="luggage"><span class="text-light">Car Luggage </span></label>
                    <input type="text" class="form-control  @error('luggage') is-invalid @enderror" id="luggage" name="luggage" value="{{ $car->luggage }}">
                     @error('luggage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="fuel"><span class="text-light">Car Fuel </span></label>
                    <input type="text" class="form-control  @error('fuel') is-invalid @enderror" id="fuel" name="fuel" value="{{ $car->fuel }}">
                     @error('fuel') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="decs"><span class="text-light">Car Dscription </span></label>
                    <textarea name="decs" id="decs"  class="form-control" cols="" rows="8">{{ $car->decs }} </textarea>
                </div>
                <div class="form-group">
                    <label for="status" ><span class="text-light"> Status</span></label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="active" name="status" value="active" class="custom-control-input" {{ $car->status == 'active' ? 'checked': '' }}>
                        <label class="custom-control-label" for="active"><span class="text-light"> Active</span></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="inactive" name="status" value="inactive" class="custom-control-input" {{ $car->status == 'inactive' ? 'checked': '' }}>
                        <label class="custom-control-label" for="inactive"><span class="text-light"> Inactive</span></label>
                    </div>

                    @error('status') <span class="text-warning font-weight-bolder font-italic d-block">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <div class="custom-control custom-radio text-right py-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
               </div>

           </form>

        </div>

    </div>

</div>

@stop
