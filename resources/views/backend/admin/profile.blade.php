@extends('backend.master')

@section('title')
admin-profile
@stop


@section('content')
  <div class="row">
      <div class="col-md-8 col-sm-12 offset-md-2">

        <div class="card ">
            <div class="card-header bg-secondary">

             <h4 class="text-center font-weight-bold text-light ">Your Profile</h4>
            </div>
            <div class="card-body">
                <div>
                    <a href="{{ route('admin.profile.edit',auth()->user()->id) }}" class="btn btn-outline-success btn-md ">Edit</a>
                </div>
                <div class="text-center">

                    <img width="120px" class="img-thumbnail rounded-circle" src="{{ asset('uploads/users/'.auth()->user()->image) }}" alt="">

                </div>
                <hr data-aos="fade-up" data-aos-delay="100">
                <div class="">
                   <div class="row">
                       <div class="col-md-10 col-sm-12 offset-md-1">
                            <!--Success or Error Msg -->
              <div class="row">
                <div class="col-md-12">
                  @if(session('message'))
                  <div class="alert alert-{{ session('type') }}">
                       <p class="text-center font-weight-bolder text-dark">{{ session('message') }}</p>
                  </div>
                @endif

                </div>

            </div>
                    <table class="table table-bordered table-striped text-justify table-secondary font-weight-bold">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ Str::ucfirst(auth()->user()->name) }}</td>
                                </tr>
                                <tr>
                                    <th>Your Email</th>
                                    <td>{{ auth()->user()->email }}</td>
                                </tr>
                                <tr>
                                    <th>Contact Number</th>
                                    <td>+880-{{ auth()->user()->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Your NID Number</th>
                                    <td>{{ auth()->user()->nid_number }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ auth()->user()->address }}</td>
                                </tr>

                            </tbody>

                        </table>


                       </div>

                   </div>
                </div>

            </div>
            <div class="card-footer bg-secondary">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-md">Back</a>
            </div>
          </div>

      </div>

  </div>
@stop
