@extends('backend.master')

@section('title')
user-list
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                <h3 class="text-center font-weight-bold text-uppercase">User Manage Table</h3>

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

                    <a href="{{-- {{ route('admin.car.brand.create') }} --}}" class="btn btn-secondary mb-2">
                        <span class="text-light">Add User</span>
                    </a>

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
                        <tbody>
                            @foreach($users as $key => $user)


                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td><img width="50px" height="50px" src="{{ asset('uploads/users/'.$user->image) }}" alt=""></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ '+880-'.$user->phone }}</td>
                                <td>{{ $user->address }}</td>

                              <td class="text-center">
                                <a class="btn btn-success btn-sm " href={{-- "{{ route('admin.car.brand.edit',$brand->id) }}" --}}><i class="far fa-edit text-dark"></i></a>
                                <a type="submit" class="btn btn-danger btn-sm  mx-1 delete" href= "{{ route('admin.user.delete',$user->id) }}"><i class="fas fa-trash text-dark"></i></a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>



                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- page end-->

@endsection
