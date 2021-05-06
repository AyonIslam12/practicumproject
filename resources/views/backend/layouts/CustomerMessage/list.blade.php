@extends('backend.master')

@section('title')
Customer-Message
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                <h3 class="text-center font-weight-bold text-uppercase">Customer Message Table</h3>

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

                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Username</th>
                                <th scope="col">User Email</th>
                                <th scope="col">User Message</th>

                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($messages as $key=> $message )
                           <tr>
                               <td>{{ $key+1 }}</td>
                               <td>{{ $message->userMessage->name }}</td>
                               <td>{{ $message->userMessage->email }}</td>
                               <td style="width: 500px">{{ $message->message }}</td>
                              <td class="text-center ">

                                <a  class="btn btn-info btn-sm  mx-1 " href="{{ route('admin.customerMessage.show',$message->id) }}"><i class="fas fa-eye text-dark"></i></a>
                                <a  class="btn btn-danger btn-sm  mx-1 delete" href="  {{ route('admin.customerMessage.delete',$message->id) }} "><i class="fas fa-trash text-dark"></i></a>
                            </td>
                            </tr>
                            @endforeach
                            <tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- page end-->

@endsection
