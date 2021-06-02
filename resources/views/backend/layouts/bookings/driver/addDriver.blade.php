@extends('backend.master')


@section('title')
Add-Driver
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 col-sm-12 offset-md-2">
            <div class="card">
                <div class="card-header text-center font-weight-bold text-dark">
                  Add Driver For Booking
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.booking.add.driver',$bookingAdd->id ) }}" method="post">
                        @csrf
                        @method("PUT")
                      {{--   <div class="form-group">
                            <label for="driver_id"> <span class="text-dark">Add Driver For Driving</span></label>
                            <select name="driver_id" id="driver_id" class="form-control">
                            <option value="">select</option>
                            @foreach ($driver as $item )
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                           </select>
                        </div> --}}
                        @if(count($driver) > 0)


                        @foreach ($driver  as $item )
                        <div class="row mb-3">
                            <div class="col-12  ">
                            <div class="d-flex">
                                <div class="">
                                    <img width="100px;" class="img-fluid"src="{{ asset('uploads/driver/'.$item->image) }}" alt="">

                                </div>
                                <div class="pl-5">
                                    <h4 class="font-weight-bold"><span class="text-dark">{{ $item->name }}</span></h4>
                                    <h6 class="font-weight-bold">Position: <span class="text-dark">{{ Str::ucfirst($item->role) }}</span></h6>
                                    <h6  class="font-weight-bold">Experiances:  <span class="text-dark">{{ $item->driver_experiance }}</span></h6>
                                    <h6 class="font-weight-bold">Contact Number:  <span class="text-dark">+880-{{ $item->phone }}</span></h6>
                                    <h6  class="font-weight-bold">Email Address:  <span class="text-dark">{{ $item->email }}</span></h6>
                                    <h6  class="font-weight-bold">NID Number:  <span class="text-dark">{{ $item->nid_number }}</span></h6>
                                    <h6  class="font-weight-bold">Address:  <span class="text-dark">{{ $item->address }}</span></h6>


                                </div>
                                <div class="ml-5">
                                    @php
 $fromDate = date("Y-m-d", strtotime($bookingAdd->from_date));
      $toDate = date("Y-m-d", strtotime($bookingAdd->to_date));

      $checkBook = $bookingAdd::query()->where('driver_id', $item->id);

      $checkBook->where(function ($query) use ($fromDate, $toDate) {
          $query->whereBetween('from_date', [$fromDate, $toDate])
              ->orWhereBetween('to_date', [$fromDate, $toDate]);
      });

$checkBook = $checkBook->get();
                                    @endphp

                                    <span>@if($checkBook->count() == 0)
                                       <p class="text-center text-dark font-weight-bold">
                                       Drive Status
                                         <span class="btn btn-outline-success btn-sm text-dark">Free For Drive</span>
                                      </p>

                                        @else
                                         <p class="text-center text-dark font-weight-bold">
                                       Drive Status
                                         <span class="btn btn-outline-warning btn-sm text-dark">Already On Drive</span>
                                         <p class="text-dark font-weight-bold">From: <span class="text-info">{{ date("Y-m-d", strtotime($bookingAdd->from_date)) }} <span class="text-dark font-weight-bold">To:</span> {{ date("Y-m-d", strtotime($bookingAdd->to_date)) }}</span></p>
                                      </p>
                                        @endif

                                    </span>
                                </div>

                            </div>

                                <div class="form-group form-check mt-3 text-dark font-weight-bolder">
                                    <input type="checkbox" value="{{ $item->id }}" name="driver_id" class="form-check-input" id="driver_id">
                                    <label class="form-check-label text-danger" for="driver_id">Select This One</label>
                                </div>
                            </div>

                        </div>


                        @endforeach
                        <div class="d-felx justify-content-left">

                            {{ $driver->links() }}

                        </div>

                        @else
                       <h5 class="bg-secondary text-light p-2 rounded">You don't have driver yet...</h5>
                        @endif

                        @if(count($driver) > 0)
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary">Add Driver</button>

                        </div>

                        @endif
                    </form>

                </div>
                <div class="card-footer bg-light text-right">
                    <a class="btn btn-secondary" href="{{ route('admin.booking.manage') }}">Back</a>

                </div>
              </div>
        </div>

    </div>
@stop
