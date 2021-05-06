@extends('backend.master')

@section('title')

driver-single-view

@stop
@section('content')

  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Driver  Single Info.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-justify">

                    <tr>
                        <th> Name</th>
                        <td>{{ $driver->name }}</td>
                    </tr>
                    <tr>
                        <th> Image</th>
                        <td><img width="70px" height="70px" src="{{ asset('uploads/driver/'.$driver->image) }}" alt=""></td>
                    </tr>
                    <tr>
                        <th> Email</th>
                        <td>{{ $driver->email }}</td>
                    </tr>
                    <tr>
                        <th> NID Number</th>
                        <td>{{ $driver->nid_number }}</td>
                    </tr>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $driver->driver }}</td>
                    </tr>
                    <tr>
                        <th> Contact Number</th>
                        <td>{{ $driver->phone }}</td>
                    </tr>
                    <tr>
                        <th> Address</th>
                        <td>{{ $driver->address }}</td>
                    </tr>

                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.driver.list') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
