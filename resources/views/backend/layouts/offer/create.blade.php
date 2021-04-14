@extends('backend.master')


@section('title')
offer-create-page
@stop


@section('content')

<div class="row">
    <div class="col-6 offset-3 bg-secondary">


        <h3 class="text-center text-light py-4">Offer Add Form</h3>
        <div class="row">
            <div class="col-6 offset-3">
                 <!-- All Type Msg-->
                 @if(session()->has('message'))
                 <div class="alert alert-{{ session('type') }}">
                     <p>{{ session('message') }}</p>
                 </div>
             @endif


            </div>

        </div>
        <form action="{{ route('admin.offer.store') }}" method="post">
            @csrf

              <div class="form-group">
                <label for="car_id"><span class="text-light">Select Car</span></label>
                <select name="car_id" id="car_id" class="form-control">
                    <option value="">Select</option>
                    @foreach ($cars as $car )
                    <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endforeach
                </select>

            <div class="form-group">
                <label for="offer_type"><span class="text-light">Offer Type</span></label>
                <input type="text" class="form-control" id="offer_type" name="offer_type" value=""  placeholder="Enter Offer Type">
            </div>

            <div class="form-group">
                <div class="custom-control custom-radio text-center py-4">
                    <button type="submit" class="btn btn-success" > Add Offer</button>
                </div>
            </div>
          </form>

    </div>
</div>
@stop
