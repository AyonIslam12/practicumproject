@extends('backend.master')

@section('title')
customer-manage
@endsection

@section('content')
<h3 class="text-secondary text-center text-info  font-weight-bold text-uppercase">Customer Manage Table</h3>
<a type="button" class="btn btn-success" href="{{ route('admin.customer.create') }}">
    Add Customer
</a>
  <div class="row">
    <div class="col-md-6 offset-3">
        @if(session('success'))
        <div class="text-center alert alert-success">
            <p class="text-center font-weight-bolder pt-2">{{ session('success') }}</p>
        </div>
        @endif

    </div>

</div>


        <div class="row">
            <div class="col-md-12">
         @if(session('message'))
            <div class="text-center alert alert-{{ session('type') }}">
                <p class="text-center text-bolder">{{ session('message') }}</p>
            </div>
        @endif
            </div>


        <table class="table table-bordered table-scripts mt-2">
            <thead class="bg-info">
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
                <td><img width="70px" height="70px" src="{{ $customer->photo }}" alt=""></td>
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
            <div class="d-felx justify-content-left">

                {{ $customers->links() }}

            </div>

        </div>

@endsection
