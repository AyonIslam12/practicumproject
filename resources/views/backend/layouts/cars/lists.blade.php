@extends('backend.master')

@section('title')
car-list
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">

                <h3 class="text-center font-weight-bold text-uppercase ">Cars Table</h3>


                <!--validation message-->
            <div class="roaw">
                <div class="col-md-12">
            @if(session('message'))
                <div class="text-center alert alert-{{ session('type') }}">
                <p class="text-center text-bolder">{{ session('message') }}</p>
                </div>
            @endif
            </div>
            </div>



                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>

            <div class="card-body">
                <div class="adv-table">
                    <a href="{{ route('admin.car.create') }}" class="btn btn-secondary"><span class="text-light">Add New</span></a>
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Car Name</th>
                                    <th scope="col">Car Brand</th>
                                    <th scope="col">Car Model</th>
                                    <th scope="col">Car Image</th>
                                    <th scope="col"> Car Price/Day</th>
                                    <th scope="col"> Car Status</th>
                                    <th scope="col"> Add Driver</th>
                                    <th scope="col" class="text-center">Action</th>
                                  </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $key=>$car )


                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $car->name }}</td>
                                <td>{{ $car->carBrand->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td><img width="80px" src="{{ url('/uploads/cars/'.$car->image )}}" alt=""></td>
                                <td>{{ $car->price_per_day.'.00'}}</td>
                                <td>{{ Str::ucfirst($car->status) }}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModal">
                                    Add Driver
                                    </a>
                                </td>

                              <td class="text-center ">
                                <a class="btn btn-info btn-sm mx-1" href="{{ route('admin.car.show',$car->id) }}"><i class="fas fa-eye text-dark"></i></a>
                                <a class="btn btn-success btn-sm " href="{{ route('admin.car.edit',$car->id) }}"><i class="far fa-edit text-dark"></i></a>
                                <a type="submit" class="btn btn-danger btn-sm  mx-1 delete" href="{{ route('admin.car.destroy',$car->id) }}"><i class="fas fa-trash text-dark"></i></a>
                            </td>

                            </tr>
                            @endforeach


                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- page end-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Driver For This Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form action="">
            <div class="form-group text-dark">
                <label for="brand_id"><span>Select Driver</span></label>
                <select class="form-control">
                    <option value="driver" class="form-control">Default select</option>
                  </select>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endsection
