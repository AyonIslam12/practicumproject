@extends('backend.master')

@section('title')

Car-single-view

@stop
@section('content')


  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Car Single Info.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-left class="text-center" ">
                    <tr>
                        <th>Car Name</th>
                        <td class="text-center" >{{ $car->name }}</td>
                    </tr>
                    <tr>
                        <th>Car Brand</th>
                        <td class="text-center" >{{ $car->carBrand->brand }}</td>
                    </tr>
                    <tr>
                        <th>Car Model</th>
                        <td class="text-center" >{{ $car->model}}</td>
                    </tr>
                    <tr>
                        <th>Car Image</th>
                      <td class="text-center" >  <img width="100px" class="img-thumbnail" src="{{ url('/uploads/cars/'.$car->image) }}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Car Color</th>
                        <td class="text-center" >{{ $car->color }}</td>
                    </tr>
                    <tr>
                        <th>Car Price/Day</th>
                        <td class="text-center" >{{ $car->price_per_day.'.00'.' TK' }}</td>
                    </tr>
                    <tr>
                        <th>Car Air condition</th>
                        @if($car->air_condition == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Power Deadlock</th>
                        @if($car->power_deadlock == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Anti Lock Braking</th>
                        @if($car->anti_lockbraking == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Brake Assist</th>
                        @if($car->brake_assist == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Power Steering</th>
                        @if($car->power_steering == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>CD Player</th>
                        @if($car->cd_player == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Central Locking</th>
                        @if($car->central_looking == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Crash Sensor</th>
                        @if($car->crash_sensor == 1)
                        <td class="text-center" ><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                        @else
                        <td class="text-center" ><i class="fa fa-close text-danger" aria-hidden="true"></i></td>
                        @endif

                    </tr>
                    <tr>
                        <th>Car Mileage</th>
                        <td class="text-center" >{{ $car->mileage }}</td>
                    </tr>
                    <tr>
                        <th>Car Transmission</th>
                        <td class="text-center" >{{ $car->transmission }}</td>
                    </tr>
                    <tr>
                        <th>Car Seats</th>

                            <td class="text-center" >{{ $car->seats }}</td>

                    </tr>

                    <tr>
                        <th>Car Luggage</th>

                           <td class="text-center" >{{ $car->luggage }}</td>

                    </tr>

                    <tr>
                        <th>Car Fuel</th>

                           <td class="text-center" >{{ $car->fuel }}</td>

                    </tr>
                    <tr >
                        <th >Car Description</th>

                            <td class="text-center" >{{ $car->decs }}</td>

                    </tr>
                    <tr>
                        <th >Car Status</th>

                            <td class="text-center" >{{ Str::ucfirst($car->status) }}</td>

                    </tr>



                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.car.manage') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
