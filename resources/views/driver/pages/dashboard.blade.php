@extends('driver.master')

@section('title')
Driver-Dashboard

@stop

@section('content')
 <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div >
            <a class="btn btn-success" href="{{ route('employee.profile.edit',auth()->user()->id) }}">Edit Profile</a>
            <a class="btn btn-primary" href="{{ route('employee.edit.password') }}">Change Password</a>

        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--PROFILE-->
        <div>
            <div class="profile-photo">
                <img alt="User photo" src="{{ asset('uploads/driver/'.auth()->user()->image) }}">
            </div>
            <div class="user-header-info">
                <h2 class="user-name">{{ auth()->user()->name }}</h2>
                <h5 class="user-position">{{ ucfirst(auth()->user()->role) }}</h5>
                <span class="bg-info" style="color:#000000; padding:4px;">{{ ucfirst(auth()->user()->driver_experiance) }} Experiances</span>

            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--CONTACT INFO-->
        <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
            <div class="panel-content">
                <h4 class=""><b>Contact Information</b></h4>
                <ul class="user-contact-info ph-sm">
                    <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> {{ auth()->user()->email }}</li>
                    <li><b><i class="color-primary mr-sm fa fa-phone"></i></b> +800-{{ auth()->user()->phone }}</li>
                    <li><b><i class="color-primary mr-sm fa fa-globe"></i></b> {{ auth()->user()->address }}</li>
                    <li><b><i class="color-primary mr-sm fa fa-globe"></i></b> NID Number- {{ auth()->user()->nid_number }}</li>
                </ul>
            </div>
        </div>


    </div>

 </div>

@stop
