@extends('backend.master')

@section('title')

Payment-History

@stop
@section('content')


  <div class="row my-3">
      <div class="col-md-5 col-sm-12">

          <div class="card ">
                 {{-- Validate Msg --}}
            <div class="row">
                <div class="col-md-12">
                @if(session('message'))
                    <div class="text-center alert alert-{{ session('type') }}">
                    <p class="text-center text-bolder pt-2">{{ session('message') }}</p>
                    </div>
                @endif
                </div>
                </div>
            <div class="card-header bg-info">
             <h6 class="text-light text-center">Payment Form</h6>
            </div>

            <div class="card-body">
              <form action="{{ route('admin.booking.payment.create') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="amount" class="text-dark">Add Payment</label>
                      <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                     <input type="number" name="amount" id="amount" value="" class="form-control" placeholder="00.00">
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
                        <label for="pay-time" class="text-dark">Payment Time</label>
                       <input type="time" name="pay_time" id="pay-time" value="{{ date("H:i:s") }}" class="form-control">
                       @error('pay_time') <span class="text-danger font-weight-bolder font-italic ">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group" >
                        <label for="pay-date" class="text-dark">Payment Date</label>
                       <input type="date" name="pay_date" id="pay-date" value="{{ date('Y-m-d') }}" class="form-control">
                       @error('pay_date') <span class="text-danger font-weight-bolder font-italic ">{{ $message }}</span> @enderror
                    </div>



            </div>
            <div class="card-footer  bg-info">
            <a class="btn btn-secondary" href="{{ route('admin.booking.manage') }}"> Back</a>
            <button type="submit" class="btn btn-secondary text-white" >Do Payment</button>
            </div>
        </form>
          </div>

      </div>
      <div class="col-md-7 col-sm-12">


            <div class="card ">
                <div class="card-header bg-success">
                 <h5 class="text-light text-center">Payment History</h5>
                </div>
                <div id="printArea">
                    <div class="card-body">
                       <div class="d-flex  justify-content-between">
                        <h5 class="text-center text-dark font-weight-bold">Your Invoice</h5>
                        <img src="{{ asset('uploads/logo/logo.png') }}" alt="">

                       </div>
                        <div class="text-center">
                            {{-- <h4><span class="text-danger font-weight-bold">Sarker</span> <span class="text-dark font-weight-bold">Cars</span></h4> --}}
                            <div class="logo">


                            </div>
                            <ul style="font-size: 15px" class="list-group list-group-flush text-left  p-3">
                                <li class=" d-flex justify-between font-weight-bolder fx-2">Customer Name :
                                    <span class="text-dark  pl-2">{{ucfirst( $booking->bookingUser->name )}}</span>
                                </li>
                                <li class="  font-weight-bolder fx-2">Customer Email :
                                    <span class="text-dark  pl-2">{{ Str::ucfirst($booking->bookingUser->email) }}</span>
                                </li>
                                <li class="  font-weight-bolder fx-2">Customer Phone :
                                    <span class="text-dark  pl-2">{{ '+880-'.$booking->bookingUser->phone }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Car Name :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->name }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Car Barnd :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->carBrand->brand }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Car Engine :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->car_engine }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Rent/Day :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->price_per_day }}.00 TK.</span>
                                </li>
                                <li class="  font-weight-bolder"> Car Discount Offer :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->discount_offer.'.00 TK' }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Booking Insurance Fee :
                                    <span class="text-dark pl-2">{{ $booking->bookingCar->insurance_fee.'.00 TK' }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Booking Date :
                                    <span class="text-dark pl-2">{{ date('Y-m-d', strtotime($booking->from_date)) }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Return Date :
                                    <span class="text-dark pl-2">{{ date('Y-m-d', strtotime($booking->to_date)) }}</span>
                                </li>
                                <li class="  font-weight-bolder"> Total Days:
                                    <span class="text-dark pl-2">@php
                                        $daysCalculation = (strtotime($booking->to_date)-strtotime($booking->from_date));
                                               $daysCalculation = round(($daysCalculation / (60 * 60 * 24))+1);
                                              echo $daysCalculation." Days";
                                           @endphp</span>
                                </li>
                                <li class="  font-weight-bolder"> Total Amount :
                                    <span class=" pl-2" >{{ $booking->total_price }}.00 TK.</span>
                                </li>
                                <li class="  font-weight-bolder"> Due Amount :
                                    <span class="text-dark pl-2">{{ $booking->due }}.00 TK.</span>
                                </li>
                                <li class=" font-weight-bolder"> Payment Status :
                                    <span class="text-dark pl-2">@if($booking->due > 0)
                                        <span class="text-dark">unpaid (<span class="text-danger font-weight-bold">{{ $booking->due }}.TK</span>) <span>
                                        @else
                                        <span>Paid <i class="far fa-check-circle text-success"></i><span>
                                        @endif
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <table class="table table-borderd table-striped">
                            <thead>
                                <tr>
                                    <th>Tranaction Id</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Pyament Method</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment )


                                <tr>
                                    <td>{{ $payment->transaction_id }}</td>
                                    <td>{{ date("h:i:s a", strtotime($payment->pay_time)) }}</td>
                                    <td>{{ date("Y-m-D", strtotime($payment->pay_date)) }}</td>
                                    <td>{{ $payment->amount }}.00 TK</td>
                                    <td class="text-center">{{ $payment->payment_method }}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>


                    </div>

                </div>
                <div class="card-footer  bg-info">
                    <a class="btn btn-secondary" href="{{ route('admin.booking.manage') }}"> Back</a>
                    <button type="button" onclick="printDiv()" class="btn btn-secondary text-white" >
                        Print/Download
                    </button>
                </div>

              </div>



      </div>

  </div>

  <script type="text/javascript">

    function printDiv(){
        var printContents = document.getElementById("printArea").innerHTML;
        var orginalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();

        document.body.innerHTML = orginalContents;
    }

</script>


@stop
