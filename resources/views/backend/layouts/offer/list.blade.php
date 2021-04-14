@extends('backend.master')

@section('title')
Offer-Manage
@endsection

@section('content')
<h3 class="text-secondary text-center text-info  font-weight-bold text-uppercase">Offer Manage Table</h3>



    <a type="button" class="btn btn-success" href=" {{ route('admin.offer.create') }} ">
        Add New Offer
    </a>
    <div class="row">
        <div class="col-8 offset-2">
            <!-- Success Message-->
            @if(session('success'))
            <div class="alert alert-success text-center">
                <p class="text-center text-bolder">{{ session('success')  }}</p>
            </div>

            @endif


        </div>
        <table class="table table-bordered table-scripts mt-2">
            <thead class="bg-info">
              <tr>
                <th scope="col">SL Number</th>
                <th scope="col">Offer Type</th>
                <th scope="col">Car Name</th>
                <th scope="col">Car Brand</th>
                <th scope="col">Car Image</th>

                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>


                @foreach ($offers as $offer)


              <tr>
                <th scope="row">1</th>
                <td>{{ $offer->offer_type }}</td>
                <td>{{ $offer->offerCar->name }}</td>
                <td>{{ $offer->offerCar->brand }}</td>
                <td><img width="70px" src="{{ url('uploads/cars/'.$offer->offerCar->image) }}" alt=""></td>


                <td class="d-flex justify-content-center">
                    <a href="{{-- {{ route('admin.customer.show',$customer->id) }} --}}" class="btn btn-info btn-sm mx-1" >View</a>

                    <a href="{{-- {{ route('admin.customer.edit',$customer->id) }} --}}" class="btn btn-primary btn-sm mx-1">Edit</a>
                      <form action="{{-- {{ route('admin.customer.delete',$customer->id) }} --}}" method="post">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm  mx-1 delete">Delete</button>

                      </form>

                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>

            </div>

        </div>
          {{-- {{'page:-'.$customers->currentpage() }}
          {{ $customers->links() }}
 --}}

@endsection
