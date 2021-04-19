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
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $car->name }}"  placeholder="Enter Name">
                    @error('name') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="brand"><span class="text-light">Car Brand</span></label>
                    <input type="text" class="form-control  @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ $car->brand }}"  placeholder="Enter Car Brand Name">
                     @error('brand') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="model"><span class="text-light">Car Model</span></label>
                    <input type="text" class="form-control  @error('fuel') is-invalid @enderror" id="model" name="model" value="{{ $car->model }}"  placeholder="Enter Car Model Name">
                     @error('model') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="image"><span class="text-light">Uploads Car Image</span></label>
                    <input type="file" class="form-control" id="image" name="image" >
                </div>
                <div class="form-group">
                    <label for="color"><span class="text-light">Car Color</span></label>
                    <input type="text" class="form-control  @error('color') is-invalid @enderror" id="color" name="color" value="{{ $car->color }}"  placeholder="Enter Car Color">
                     @error('color') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="price"><span class="text-light">Car Price</span></label>
                    <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" value="{{ $car->price }}"  placeholder="Enter Car Price">
                     @error('price') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="mileage"><span class="text-light">Car Mileage</span></label>
                    <input type="text" class="form-control  @error('mileage') is-invalid @enderror" id="mileage" name="mileage" value="{{ $car->mileage }}"  placeholder="Enter Car Mileage">
                     @error('mileage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="transmission"><span class="text-light">Car Transmission </span></label>
                    <input type="text" class="form-control  @error('transmission') is-invalid @enderror" id="transmission" name="transmission" value="{{ $car->transmission }}"  placeholder="Enter Car Transmission Type">
                     @error('transmission') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="seats"><span class="text-light">Car seats Capacity </span></label>
                    <input type="number" class="form-control  @error('seats') is-invalid @enderror" id="seats" name="seats" value="{{ $car->seats }}"  placeholder="Enter Car Seat Numbers">
                     @error('seats') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="luggage"><span class="text-light">Car Luggage </span></label>
                    <input type="text" class="form-control  @error('luggage') is-invalid @enderror" id="luggage" name="luggage" value="{{ $car->luggage }}"  placeholder="Enter Car Luggage">
                     @error('luggage') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="fuel"><span class="text-light">Car Fuel </span></label>
                    <input type="text" class="form-control  @error('fuel') is-invalid @enderror" id="fuel" name="fuel" value="{{ $car->fuel }}"  placeholder="Enter Car Fuel">
                     @error('fuel') <span class="text-warning font-italic font-weight-bolder">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="decs"><span class="text-light">Car Dscription </span></label>
                    <textarea name="decs" id="decs" class="form-control" cols="" rows="8">Enter Your Car Information...</textarea>
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
