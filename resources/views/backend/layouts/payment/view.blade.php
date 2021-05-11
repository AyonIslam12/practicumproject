@extends('backend.master')

@section('title')
payment-single-view
@stop
@section('content')

  <div class="row">
      <div class="col-8 offset-2">
        <div class="card text-center">
            <div class="card-header bg-info">
              <p class="text-light">Payment  Single Info.</p>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped text-justify">
                    <tr>
                        <th>Customer  Name</th>
                        <td>{{ $payment->payBooking->bookingUser->name}}</td>
                    </tr>
                    <tr>
                        <th>Customer  Email</th>
                        <td>{{ $payment->payBooking->bookingUser->email}}</td>
                    </tr>
                    <tr>
                        <th>Customer Contact Number</th>
                        <td>+880-{{ $payment->payBooking->bookingUser->phone}}</td>
                    </tr>
                    <tr>
                        <th>Customer Address</th>
                        <td>{{ $payment->payBooking->bookingUser->address}}</td>
                    </tr>
                    <tr>
                        <th>Car Name</th>
                        <td>{{ $payment->payBooking->bookingCar->name}}</td>
                    </tr>
                    <tr>
                        <th>Booking Amount</th>
                        <td>{{ $payment->payBooking->total_price}}.00 TK</td>
                    </tr>
                    <tr>
                        <th>Payment Amount</th>
                        <td>{{ $payment->amount}}.00 TK</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>{{ $payment->payment_method}}</td>
                    </tr>
                    <tr>
                        <th>Tranction  Id</th>
                        <td>{{ $payment->transaction_id}}</td>
                    </tr>
                    <tr>
                        <th>Payment Date</th>
                        <td>{{ date("Y-M-D", strtotime($payment->pay_date))}}</td>
                    </tr>


                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.payment.list') }}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

  </div>

@stop