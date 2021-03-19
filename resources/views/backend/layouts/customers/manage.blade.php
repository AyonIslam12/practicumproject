@extends('backend.master')

@section('title')
customer-manage
@endsection

@section('content')
<h3 class="text-secondary">Customer Manage Table</h3>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Photo</th>
        <th scope="col">Age</th>
        <th scope="col">NID Number</th>
        <th scope="col">Gender</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>

@endsection
