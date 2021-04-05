@extends('backend.master')


@section('title')
driver-list
@stop

@section('content')

{{-- @dd($errors->any()) --}}


<div class="row">
    <div class="col-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#driver">
    Add Driver

   </button>

   @if(session('success'))
   <div class="text-center alert alert-success mt-1">
       <p class="text-center font-weight-bolder pt-2">{{ session('success') }}</p>
   </div>
   @endif

   <!-- End Button trigger modal -->
        <table class="table  table-bordered table-scripts mt-3">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Sl Number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Contact</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $driver_list as  $key=>$data)


                <tr>

                    <td>{{ $key+1}}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->contact }}</td>
                    <td class="d-flex justify-content-center">

                        <a href="{{-- {{ route('admin.customer.show',$customer->id) }} --}}" class="btn btn-info btn-sm mx-1" >View</a>

                    <a href="?" class="btn btn-primary btn-sm mx-1">Edit</a>
                      <form action="{{-- {{ route('admin.customer.delete',$customer->id) }} --}}" method="post">

                          <form action="" method="post">

                              <button type="submit" class="btn btn-danger btn-sm  mx-1 delete">Delete</button>

                          </form>
                    </td>

                </tr>
                @endforeach

            </tbody>
          </table>

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
      <form action="{{ route('admin.driver.create') }}" method="post">
      <div class="modal-body">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name"  placeholder="Enter Name">
                @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control @error('name')is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror


            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
              @error('password') <span class="text-danger text-italic">{{ $message }}</span>@enderror


            </div>


            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="number"class="form-control" id="contact" name="contact"  placeholder="Enter Contact Number">
                @error('contact') <span class="text-danger text-italic">{{ $message }}</span>@enderror
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



