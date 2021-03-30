@extends('backend.master')

@section('title')
customer-manage
@endsection

@section('content')
<h3 class="text-secondary text-center text-info  font-weight-bold text-uppercase">Customer Manage Table</h3>

{{--
  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#customer">
 Add Customer
</button> --}}
  <!-- End Button trigger modal -->


        <div class="row">
            <div class="col-md-12">
         @if(session('message'))
            <div class="text-center alert alert-{{ session('type') }}">
                <p class="text-center text-bolder">{{ session('message') }}</p>
            </div>
        @endif
    <!-- Button trigger modal -->
    <a type="button" class="btn btn-success" href="{{ route('admin.customer.create') }}">
        Add Customer
    </a>
        <table class="table table-bordered table-scripts mt-2">
            <thead>
              <tr>
                <th scope="col">SL Number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Photo</th>
                <th scope="col">Age</th>
                <th scope="col">NID Number</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key=>$customer )


              <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td><img src="{{ asset('uplaods/customer/'.$customer->photo) }}" alt="No"></td>
                <td>{{ $customer->age.' '.'years old' }}</td>
                <td>{{ $customer->nid_num }}</td>
                <td>{{ $customer->gender }}</td>
                <td>{{ $customer->contact }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ ucfirst($customer->status) }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('admin.customer.show',$customer->id) }}" class="btn btn-info btn-sm mx-1" >View</a>

                    <a href="{{ route('admin.customer.edit',$customer->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                      <form action="{{ route('admin.customer.delete',$customer->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm  mx-1 delete">Delete</button>

                      </form>

                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>

            </div>

        </div>
          {{-- {{'page:-'.$customers->currentpage() }}
          {{ $customers->links() }}
 --}}



{{-- <!-- Modal For Add Customers -->
<div class="modal fade" id="customer" tabindex="-1" aria-labelledby="customerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="customerLabel">Customer Add Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age"  placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label for="nidnum">NID Number</label>
                <input type="number"class="form-control" id="nidnum" name="nidnum"  placeholder="Enter NID Number">
            </div>

            <div class="form-group">
                <label for="gender" >Gender</label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="male" name="gender" value="male" class="custom-control-input" >
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="female" name="gender" value="female" class="custom-control-input" >
                    <label class="custom-control-label" for="female">Female</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="others" name="gender" value="others" class="custom-control-input" >
                    <label class="custom-control-label" for="others">Others</label>
                </div>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo"  >
            </div>

            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="number"class="form-control" id="contact" name="contact"  placeholder="Enter Contact Number">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter Your Address" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="status" >Status</label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="active" name="status" value="active" class="custom-control-input" >
                    <label class="custom-control-label" for="active">Active</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="inactive" name="status" value="inactive" class="custom-control-input" >
                    <label class="custom-control-label" for="inactive">Inactive</label>
                </div>
            </div>



          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Customer  </button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Customer Add --> --}}


<!-- Modal View Single Page -->
{{-- <div class="modal fade" id="customer_view" tabindex="-1" aria-labelledby="customer_viewLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title " id="customer_viewLabel">View Single Customer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <div class="row justify-content-center">
        <div class=" col-md-12  ">
            <table class="table table-bordered table-striped">

                <tr>
                    <th>Name</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>Email Address</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>Age</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>NID Number</th>
                    <td>ggggggggggggg</td>

                </tr>

                <tr>
                    <th>Gender</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>Contact</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>Address</th>
                    <td>ggggggggggggg</td>

                </tr>
                <tr>
                    <th>Status</th>
                    <td>ggggggggggggg</td>

                </tr>


            </table>


        </div>

    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

<!-- Modal View Single Page -->
 --}}


@endsection
