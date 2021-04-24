@extends('backend.master')


@section('title')
Brand-Create
@stop


@section('content')

<div class="row">
    <div class="col-6 offset-3 bg-secondary">


        <h3 class="text-center text-light py-4">Brand Add Form</h3>
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
        <form action="{{ route('admin.car.brand.store') }}" method="post">
            @csrf

              <div class="form-group">

            <div class="form-group">
                <label for="brand"><span class="text-light">Brand</span></label>
                <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand" value="{{ old('brand') }}"  placeholder="Enter Car Brand Name">
                @error('brand') <span class="text-warning font-weight-bolder font-italic d-block">{{ $message }}</span> @enderror
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
                    <button type="submit" class="btn btn-success" > Add Brand</button>
                </div>
            </div>
          </form>

    </div>
</div>
@stop
