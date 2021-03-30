@extends('backend.master')

@section('title')
car-list
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold text-uppercase py-3">Cars List Table</h3>

            <a href="{{ route('admin.car.create') }}" class="btn btn-secondary mb-2"><span class="text-light">Add New</span></a>

            <table class="table table-bordered table-scripts">
                <thead>
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Brand</th>
                    <th scope="col">Car Model</th>
                    <th scope="col">Car Color</th>
                    <th scope="col">Car Sit Capacity</th>
                    <th scope="col">Car Number Plate</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $key=>$car )


                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $car->car_name }}</td>
                    <td>{{ $car->car_brand }}</td>
                    <td>{{ $car->car_model }}</td>
                    <td>{{ $car->car_color }}</td>
                    <td>{{ $car->sit_capacity }}</td>
                    <td>{{ $car->n_plate }}</td>
                    <td class="text-center">
                        <a class="btn btn-info btn-sm" href="#">View</a>
                        <a class="btn btn-success btn-sm" href="#">Edit</a>
                        <a class="btn btn-danger btn-sm" href="#">Delete</a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>

    </div>
@endsection
