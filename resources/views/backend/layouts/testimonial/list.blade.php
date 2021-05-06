@extends('backend.master')

@section('title')
testimonials-list
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                <h3 class="text-center font-weight-bold text-uppercase">Testimonials Manage Table</h3>

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

                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Message</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testmonials as $key => $value )


                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->userTestimonials->name }}</td>
                                <td class="text-justify" style="width:650px" >{{ $value->message }}</td>
                              <td class="text-center">
                                <a type="submit" class="btn btn-info btn-sm  mx-1 " href= "{{ route('admin.testimonials.show',$value->id) }}"><i class="fas fa-eye text-dark"></i></a>
                                <a type="submit" class="btn btn-danger btn-sm  mx-1 delete" href= "{{ route('admin.testimonials.delete',$value->id) }}"><i class="fas fa-trash text-dark"></i></a>
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
