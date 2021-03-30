@extends('backend.master')

@section('title')
admin-dashboard
@endsection

@section('content')
 <!--state overview start-->
 <div class="row state-overview">
    <div class="col-lg-3 col-sm-6">
        <section class="card">
            <div class="symbol terques">
                <i class="fa fa-user"></i>
            </div>
            <div class="value">
                <h1 class="count">
                    0
                </h1>
                <p class="text-success">All Customers</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
            <div class="symbol red">
                <i class="fa fa-user"></i>
            </div>
            <div class="value">
                <h1 class=" count2">
                    0
                </h1>
                <p class="text-primary">All Drivers</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
            <div class="symbol yellow">
                <i class="fas fa-car-side"></i>
            </div>
            <div class="value">
                <h1 class=" count3">
                    0
                </h1>
                <p class="text-info">All Active Cars</p>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-6">
        <section class="card">
            <div class="symbol yellow">
                <i class="fas fa-car-crash"></i>
            </div>
            <div class="value">
                <h1 class=" count3">
                    0
                </h1>
                <p class="text-info">Insurance</p>
            </div>
        </section>
    </div>

</div>
<!--state overview end-->
@endsection

