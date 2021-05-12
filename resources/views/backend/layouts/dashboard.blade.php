@extends('backend.master')

@section('title')
admin-dashboard
@endsection

@section('content')
 <!--state overview start-->
 <div class="row state-overview">
    <div class="col-lg-3 col-sm-6">
        <section class="card">
            <a href="{{ route('admin.user.list') }}">
                <div class="symbol terques">
                    <i class="fa fa-user"></i>
                </div>
                <div class="value">
                    <h1 class="">
                        {{ count($user) }}
                    </h1>
                    <p class="text-success">All Customers</p>
                </div>
            </a>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
           <a href="{{ route('admin.driver.list') }}">
            <div class="symbol red">
                <i class="fa fa-user"></i>
            </div>
            <div class="value">
                <h1 class=" ">
                   {{ count($driver) }}
                </h1>
                <p class="text-primary">All Drivers</p>
            </div>
           </a>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
           <a href="{{ route('admin.car.manage') }}">
            <div class="symbol yellow">
                <i class="fas fa-car-side"></i>
            </div>
            <div class="value">
                <h1 class="">
                    {{ count($car) }}
                </h1>
                <p class="text-info">All Active Cars</p>
            </div>
           </a>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
           <a href="{{ route('admin.insurance.list') }}">
            <div class="symbol bg-info">
                <i class="fas fa-car-crash"></i>
            </div>
            <div class="value">
                <h1 class=" ">
                  {{count($insurance)}}
                </h1>
                <p class="text-info">Insurance</p>
            </div>
           </a>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
           <a href="{{ route('admin.booking.manage') }}">
            <div class="symbol bg-primary">
                <i class="fa fa-book"></i>
            </div>
            <div class="value">
                <h1 class=" ">
                  {{count($booking)}}
                </h1>
                <p class="text-info">All Booking</p>
            </div>
           </a>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
           <a href="{{ route('admin.payment.list') }}">
            <div class="symbol terques">
                <i class="fab fa-cc-amazon-pay"></i>
            </div>
            <div class="value">
                <h1 class=" ">
                  {{count($payment)}}
                </h1>
                <p class="text-info">All Payments</p>
            </div>
           </a>
        </section>
    </div>

</div>
<!--state overview end-->
@endsection

