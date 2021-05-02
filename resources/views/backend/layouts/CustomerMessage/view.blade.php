@extends('backend.master')

@section('title')

customer-message-single-view

@stop
@section('content')

  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Customer Message  Single Info.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped ">

                    <tr>
                        <th style="width: 150px" >User Name</th>
                        <td>{{ $message->userMessage->name }}</td>
                    </tr>
                    <tr>
                        <th style="width: 150px" >User Email</th>
                        <td>{{ $message->userMessage->email }}</td>
                    </tr>
                    <tr>
                        <th style="width: 150px" >User Phone Number</th>
                        <td>{{ '+880-'.$message->userMessage->phone }}</td>
                    </tr>
                    <tr>
                        <th style="width: 150px" >User Address</th>
                        <td>{{ $message->userMessage->address }}</td>
                    </tr>
                    <tr>
                        <th style="width: 150px" >Customer Message</th>
                        <td class="text-justify">{{ $message->message }}</td>
                    </tr>

                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.customerMessage.list') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
