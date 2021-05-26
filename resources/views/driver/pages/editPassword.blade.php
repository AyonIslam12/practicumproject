@extends('driver.master')


@section('title')
driver-password-reset
@stop

@section('content')
<div class="row" style="color:#000000">
    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-md-offset-2">
        <div class="account_tab_content tab-content">
            <div id="admin_tab" class="tab-pane active">
                <div class="card ">
                    <!--Validation Message-->
                    <div class="row">
                        <div class="col-md-12">
                        @if(session('message'))
                        <div class="text-center alert alert-{{ session('type') }}">
                            <p class="text-center text-bolder">{{ session('message') }}</p>
                        </div>
                    @endif
                        </div>
                    </div>
                    <div class="card-header bg-info" style="padding:14px; font-size:25px">
                      <p class="text-light font-weight-bold text-center">Change Password</p>
                    </div>
                    <div class="card-body">
                        <form action=" {{ route('employee.update.password') }}" method="post" >
                            @csrf

                            <div class="form-group">
                                <label for="password">Current Password</label>
                                <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror"  id="password"    value="">
                                @error('old_password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password"   value="">
                                @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="password"> Confirm Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password_confirmation"   value="">
                                @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                            </div>



                        <div class="card-footer bg-info text-right" style="padding:10px;">
                            <a style="margin-top: 10px;" type="button" href="{{ route('employee.dashboard') }}" class="btn btn-secondary text-light" data-bs-dismiss="modal">Back</a>
                            <button type="submit"  class="btn btn-primary">Change Password</button>
                        </div>

                    </form>
                    </div>

                  </div>


        </div>


    </div>
    </div>

</div>
@stop
