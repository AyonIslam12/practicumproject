@extends('backend.master')

@section('title')

Payment-History

@stop
@section('content')

  <div class="row">
      <div class="col-md-12 col-sm-12 text-center ">


      <div class="card">
        <div class="card-header">
           <h4 class="text-dark"> Booking Information</h4>
        </div>
       <div class="row">
           <div class="col-md-8 col-sm-12 offset-md-4 ">
            <div class="card-body">
                <ul style="font-size: 15px" class="list-group list-group-flush text-left  p-3">
                    <li class="text-info font-weight-bolder fx-2">Customer Name : <span class="text-dark  pl-2">{{ $booking->bookingUser->name }}</span></li>
                    <li class="text-info font-weight-bolder"> Car Name : <span class="text-dark pl-2">{{ $booking->bookingCar->name }}</span></li>
                    {{-- <li class="text-info font-weight-bolder"> Car Image : <span class="text-dark pl-2"><img width="70px" class="img-thumbnail" src="{{asset('uploads/cars/'. $booking->bookingCar->image) }}" alt=""></span></li> --}}
                   {{--  <li class="text-info font-weight-bolder"> Discount Amount : <span class="text-dark pl-2">{{ $booking->bookingCar->discount_offer }}.00 BDT.</span></li> --}}
                    {{-- <li class="text-info font-weight-bolder"> Insurance Fee : <span class="text-dark pl-2">{{ $booking->bookinInsurance->insurance_fee }}.00 BDT.</span></li> --}}
                    <li class="text-info font-weight-bolder"> Total Amount : <span class="text-dark pl-2">{{ $booking->total_price }}.00 BDT.</span></li>
                    <li class="text-info font-weight-bolder"> Due Amount : <span class="text-dark pl-2">{{ $booking->total_price }}.00 BDT.</span></li>

                </ul>
            </div>

           </div>

       </div>
      </div>
   </div>
  </div>

  <div class="row my-3">
      <div class="col-md-6 col-sm-12">

          <div class="card ">
            <div class="card-header bg-info">
             <h6 class="text-light text-center">Payment Form</h6>
            </div>
            {{-- Validate Msg --}}
            <div class="row">
                <div class="col-md-12">
                @if(session('message'))
                    <div class="text-center alert alert-{{ session('type') }}">
                    <p class="text-center text-bolder">{{ session('message') }}</p>
                    </div>
                @endif
                </div>
                </div>
            <div class="card-body">
              <form action="{{ route('admin.booking.payment.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="amount" class="text-dark">Add Payment</label>
                      <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                     <input type="text" name="amount" id="amount" value="" class="form-control" placeholder="00.00">
                     @error('amount') <span class="text-danger font-weight-bolder font-italic d-block">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="payment_method" class="text-dark">Payment Method</label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            <option value="cash">Cash</option>
                            <option value="bkash">Bkash</option>
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="pay-date" class="text-dark">Payment Date</label>
                       <input type="date" name="pay_date" id="pay-date" value="{{ date('Y-m-d') }}" class="form-control">
                       @error('pay_date') <span class="text-danger font-weight-bolder font-italic ">{{ $message }}</span> @enderror
                      </div>



            </div>
            <div class="card-footer  bg-info">
            <button type="submit" class="btn btn-secondary text-white" >Do Payment</button>
            </div>
        </form>
          </div>

      </div>
      <div class="col-md-6 col-sm-12">

          <div class="card ">
            <div class="card-header bg-success">
             <h5 class="text-light text-center">Payment History</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderd">
                    <thead>
                        <tr>
                            <th>Tranaction Id</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Pyament Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment )


                        <tr>
                            <td>{{ $payment->transaction_id }}</td>
                            <td>{{ $payment->pay_date }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>{{ $payment->payment_method }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

          </div>

      </div>

  </div>

@stop
