@extends('backend.master')

@section('title')
car-list
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold text-uppercase py-3">Cars List Table</h3>

            <a href="{{ route('admin.car.create') }}" class="btn btn-secondary mb-2"><span class="text-light">Add New</span></a>

            <div class="row">
                <div class="col-8 offset-2">
                    <!-- Success Message-->
                    @if(session('success'))
                    <div class="alert alert-success text-center">
                        <p class="text-center text-bolder">{{ session('success')  }}</p>
                    </div>

                    @endif


                </div>

            </div>
            <table class="table table-bordered table-scripts">
                <thead>
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Brand</th>
                    <th scope="col">Car Model</th>
                    <th scope="col">Car Image</th>
                    <th scope="col">Car Color</th>
                    <th scope="col"> Car Price/Day</th>
                    <th scope="col">Car Mileage</th>
                    <th scope="col">Car Transmission</th>
                    <th scope="col">Car Seats</th>
                    <th scope="col">Car Luggage</th>
                    <th scope="col">Car Fuel</th>
                    <th scope="col">Car Description</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cars as $key=>$car )


                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td><img width="80px" src="{{ url('/uploads/cars/'.$car->image )}}" alt=""></td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->price}}</td>
                    <td>{{ $car->mileage }}</td>
                    <td>{{ $car->transmission }}</td>
                    <td>{{ $car->seats }}</td>
                    <td>{{ $car->luggage }}</td>
                    <td>{{ $car->fuel }}</td>
                    <td>{{ $car->decs }}</td>
                    <td class="text-center d-flex">
                        <a class="btn btn-info btn-sm mx-1" href="{{ route('admin.car.show',$car->id) }}">View</a>
                        <a class="btn btn-success btn-sm mx-1" href="{{ route('admin.car.edit',$car->id) }}">Edit</a>
                       <form action="{{ route('admin.car.destroy',$car->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1 delete">Delete</button>

                    </form>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>

    </div>
@endsection
