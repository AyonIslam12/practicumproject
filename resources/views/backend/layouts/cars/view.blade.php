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
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Car Name</th>
                        <td>{{ $car->name }}</td>
                    </tr>
                    <tr>
                        <th>Car Brand</th>
                        <td>{{ $car->brand }}</td>
                    </tr>
                    <tr>
                        <th>Car Model</th>
                        <td>{{ $car->model}}</td>
                    </tr>
                    <tr>
                        <th>Car Image</th>
                      <td>  <img width="100px" class="img-thumbnail" src="{{ url('/uploads/cars/'.$car->image) }}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Car Color</th>
                        <td>{{ $car->color }}</td>
                    </tr>
                    <tr>
                        <th>Car Price/Day</th>
                        <td>{{ $car->price.'.00'.' TK' }}</td>
                    </tr>
                    <tr>
                        <th>Car Mileage</th>
                        <td>{{ $car->mileage }}</td>
                    </tr>
                    <tr>
                        <th>Car Transmission</th>
                        <td>{{ $car->transmission }}</td>
                    </tr>
                    <tr>
                        <th>Car Seats</th>

                            <td>{{ $car->seats }}</td>

                    </tr>

                    <tr>
                        <th>Car Luggage</th>

                           <td>{{ $car->luggage }}</td>

                    </tr>

                    <tr>
                        <th>Car Fuel</th>

                           <td>{{ $car->fuel }}</td>

                    </tr>
                    <tr>
                        <th>Car Description</th>

                            <td>{{ $car->decs }}</td>

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
