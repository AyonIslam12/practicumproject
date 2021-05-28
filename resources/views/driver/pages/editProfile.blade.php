@extends('driver.master')

@section('title')
Driver-profile-edit
@stop

@section('content')
<div class="row" style="color: #000000">
    <div class="col-lg-8 col-md-8 col-sm-10 col-md-offset-2">
        <div class="account_tab_content tab-content">
            <div id="admin_tab" class="tab-pane active">
                <div class="card ">
                    <!--Validation Message-->
                    <div class="row" >
                        <div class="col-md-12">
                        @if(session('message'))
                        <div class="text-center alert alert-{{ session('type') }}">
                            <p class="text-center text-bolder">{{ session('message') }}</p>
                        </div>
                    @endif
                        </div>
                    </div>
                    <div class="card-header bg-info" style="padding: 14px; font-size:25px">
                      <p class="text-light font-weight-bold text-center"> Profile Update</p>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('employee.profile.update',$driver->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name"   value="{{ $driver->name }} ">
                                @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                              <label for="email">Email Address</label>
                              <input type="email" class="form-control @error('name')is-invalid @enderror" id="email" name="email"   value="{{ $driver->email }} ">
                              @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror


                            </div>
                            <div class="form-group">
                                <label for="image">Upload Photo</label>
                               <input type="file" name="image" id="image" class=" form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                <input type="number"class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="0{{ $driver->phone }}">
                                @error('phone') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="driver_experiance">Driver Experiances</label>
                                <input type="text"class="form-control @error('driver_experiance') is-invalid @enderror" id="driver_experiance" name="driver_experiance" value="{{ $driver->driver_experiance }}">
                                @error('driver_experiance') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ $driver->address }} </textarea>
                                @error('address') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                            </div>



                        <div class="card-footer bg-info text-right" style="padding:10px">
                            <a style="margin-top: 10px;" type="button" href="{{ route('employee.dashboard') }}" class="btn btn-secondary text-light" data-bs-dismiss="modal">Back</a>
                            <button type="submit"  class="btn btn-secondary">Update</button>
                        </div>

                    </form>
                    </div>

                  </div>


        </div>


    </div>
    </div>

</div>
@stop
