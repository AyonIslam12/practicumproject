@extends('backend.master')


@section('title')
Add-Driver
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
            <div class="card">
                <div class="card-header text-center text-dark">
                  Add Driver For Booking
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.booking.add.driver',$bookingAdd->id ) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <label for="driver_id"> <span class="text-dark">Add Driver For Driving</span></label>
                            <select name="driver_id" id="driver_id" class="form-control">
                            <option value="">select</option>
                            @foreach ($driver as $item )
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                           </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Driver</button>

                        </div>
                    </form>

                </div>
                <div class="card-footer bg-light text-right">
                    <a class="btn btn-secondary" href="{{ route('admin.booking.manage') }}">Back</a>

                </div>
              </div>
        </div>

    </div>
@stop
