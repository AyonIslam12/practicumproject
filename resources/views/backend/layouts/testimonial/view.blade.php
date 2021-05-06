@extends('backend.master')

@section('title')

testimonials-single-view

@stop
@section('content')

  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Testimonials  Single Info.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped ">

                    <tr>
                        <th style="width: 200px" >User Name</th>
                        <td>{{ $testmonial->userTestimonials->name }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px" >User Email</th>
                        <td>{{ $testmonial->userTestimonials->email }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px" >User Contact Number</th>
                        <td>{{ '+880-'.$testmonial->userTestimonials->phone }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px" >User Address</th>
                        <td>{{ $testmonial->userTestimonials->address }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px" >User Testimonial</th>
                        <td class="text-justify">{{ $testmonial->message }}</td>
                    </tr>
                    <tr>
                        <th style="width: 200px" >Post Date</th>
                        <td class="text-justify">{{ date("Y-M-D", strtotime($testmonial->postdate)) }}</td>
                    </tr>

                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.testimonials.list') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop
