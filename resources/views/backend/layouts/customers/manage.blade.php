@extends('backend.master')

@section('title')
customer-manage
@endsection

@section('content')
 <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">

            <h3 class="text-secondary text-center text-dark  font-weight-bold text-uppercase">Customer Manage Table</h3>

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

                    <a type="button" class="btn btn-secondary mb-1" href="{{ route('admin.customer.create') }}">
                    Add Customer
                    </a>
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
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
                                <td><img width="70px" height="70px" src="{{ $customer->photo }}" alt=""></td>
                                <td>{{ $customer->age.' '.'years old' }}</td>
                                <td>{{ $customer->nid_num }}</td>
                                <td>{{ $customer->gender }}</td>
                                <td>{{ $customer->contact }}</td>
                                <td>{{ $customer->address }}</td>
                                <td>{{ ucfirst($customer->status) }}</td>
                              <td class="text-center d-flex justify-content-center">
                                  <a class="btn btn-info btn-sm mx-1" href="{{ route('admin.customer.show',$customer->id) }}"><i class="fas fa-eye text-dark"></i></a>
                                  <a class="btn btn-success btn-sm " href="{{ route('admin.customer.edit',$customer->id) }}"><i class="far fa-edit text-dark"></i></a>
                                  <form action="{{ route('admin.customer.delete',$customer->id) }}" method="post" class="d-inline m-0">
                                      @csrf
                                      @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm  mx-1 delete"><i class="fas fa-trash text-dark"></i></button>

                                    </form>
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





@endsection


