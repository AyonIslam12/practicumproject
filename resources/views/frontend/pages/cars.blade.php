@extends('frontend.master')

@section('content')


<section class="ftco-section bg-light">
    <h1 class="text-center text-uppercase font-weight-bold pb-3">Choose The Car For Rent</h1>
    <div class="container">
        <div class="row">

            @foreach ($all_cars as $car )


            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">

                   <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset('uploads/cars/'.$car->image) }});">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ route('website.car.singlecar',$car->id) }}">{{ $car->name }}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat text-dark">{{ $car->brand }}</span>
                            <p class="price ml-auto">{{ $car->price }} <span>/day</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('website.car.singlecar',$car->id) }}" class="btn btn-secondary py-2 ml-1" >Details</a></p>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>

</section>


@endsection
