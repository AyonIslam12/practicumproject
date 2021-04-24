@extends('backend.master')

@section('title')
car-list
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center font-weight-bold text-uppercase py-3">Cars Brand Table</h3>

            <a href="{{ route('admin.car.brand.create') }}" class="btn btn-secondary mb-2"><span class="text-light">Add New Brand</span></a>


            <div class="row">
                <div class="col-md-12">
             @if(session('message'))
                <div class="text-center alert alert-{{ session('type') }}">
                    <p class="text-center text-bolder">{{ session('message') }}</p>
                </div>
            @endif
                </div>
            </div>
            <table class="table table-bordered table-scripts">
                <thead>
                  <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Car Brand</th>
                    <th scope="col">Status</th>

                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>

                @foreach ($brands as $key=> $brand )
                <tbody>


                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $brand->brand }}</td>
                    <td>{{Str::ucfirst($brand->status) }}</td>
                    <td class="text-center d-flex justify-content-center">
                        <a class="btn btn-success btn-sm mx-1" href="{{ route('admin.car.brand.edit',$brand->id) }}">Edit</a>
                    <form action="{{ route('admin.car.brand.delete',$brand->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm mx-1 delete">Delete</button>

                    </form>

                    </td>
                  </tr>

                </tbody>
                @endforeach
              </table>

              {{ $brands->links() }}

        </div>

    </div>
@endsection
