

@extends('backend.master')

@section('title')
driver-list
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                <h3 class="text-center font-weight-bold text-uppercase">Driver Manage Table</h3>

                <!--validation Message-->
                <div class="row">
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

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#driver">
                        Add Driver

                       </button>


                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Address</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        @foreach($drivers as $key => $driver)


                        <tbody>
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $driver->name }}</td>
                                <td><img width="50px" height="50px" src="{{ asset('uploads/users/'.$driver->image) }}" alt=""></td>
                                <td>{{ $driver->email }}</td>
                                <td>{{ $driver->role }}</td>
                                <td>{{ '+880-'.$driver->phone }}</td>
                                <td>{{ $driver->address }}</td>

                              <td class="text-center">
                                <a class="btn btn-success btn-sm " href= "{{ route('admin.driver.edit',$driver->id) }}"><i class="far fa-edit text-dark"></i></a>
                                <a type="submit" class="btn btn-danger btn-sm  mx-1 delete" href= "{{ route('admin.driver.delete',$driver->id) }}"><i class="fas fa-trash text-dark"></i></a>
                            </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>


<!-- Modal For Add Customers -->
<div class="modal fade" id="driver" tabindex="-1" aria-labelledby="driverLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="driverLabel">Driver Add Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('admin.driver.create') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
              @csrf
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name"  placeholder="Enter Name" value="{{ old('name') }}">
                  @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control @error('name')is-invalid @enderror" id="email" name="email"  placeholder="Enter email" value="{{ old('email') }}">
                @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror


              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                @error('password') <span class="text-danger text-italic">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                <label for="password_confirmation">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirmation Password">
                @error('password') <span class="text-danger text-italic">{{ $message }}</span>@enderror
              </div>


              <div class="form-group">
                  <label for="image">Upload Photo</label>
                 <input type="file" name="image" id="image" class=" form-control">
              </div>
              <div class="form-group">
                  <label for="phone">Contact Number</label>
                  <input type="number"class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"  placeholder="Enter Contact Number" value="{{ old('phone') }}">
                  @error('phone') <span class="text-danger text-italic">{{ $message }}</span>@enderror
              </div>
              <div class="form-group">
                  <label for="address">Address</label>
                  <textarea name="address" id="address" placeholder="Address*" class="form-control @error('address') is-invalid @enderror"></textarea>
                  @error('address') <span class="text-danger text-italic">{{ $message }}</span>@enderror
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Driver</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- End Modal Customer Add -->

<!-- page end-->




@push('js')

<script>

@if($errors->any())
$('#driver').modal('show')
@elseif ($errors->any())
$('#driver').modal('hide')


@endif
</script>

@endpush

@stop



