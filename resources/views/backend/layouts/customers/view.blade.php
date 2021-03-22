@extends('backend.master')

@section('title')

single-customer
@stop

@section('content')

<div class="row justify-content-center">
    <h4 class="py-3 text-center"> Single Customer Info. </h4>
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <td>{{ $customer->name }}</td>

            </tr>
            <tr>
                <th>Email Address</th>
                <td>{{ $customer->email }}</td>

            </tr>
            <tr>
                <th>Age</th>
                <td>{{ $customer->age }}</td>

            </tr>
            <tr>
                <th>NID Number</th>
                <td>{{ $customer->nid_num }}</td>

            </tr>

            <tr>
                <th>Gender</th>
                <td>{{ $customer->gender }}</td>

            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ $customer->contact }}</td>

            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $customer->address }}</td>

            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $customer->status }}</td>

            </tr>


        </table>
       <div class="text-right">
        <a type="button" class="btn btn-success "  href="{{ route('admin.customer.manage') }}">
            Back
        </a>
       </div>

    </div>

</div>
@stop
