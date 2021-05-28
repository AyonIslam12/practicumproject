@extends('backend.master')

@section('title')
Payment Report
@endsection


@section('content')
    <!-- page start-->
 <div class="row">
    <div class="col-sm-12">
        <section class="card">
            <header class="card-header">
                <h3 class="text-center font-weight-bold">Payment Report</h3>

                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                </span>
            </header>
            <div class="card-body">
                <div class="adv-table">
                    <div class="row">
                        <aside class="col-lg-12">
                            <section class="card bg-light">
                                <div class="card-body">
                                    <form action="{{ route('admin.report.payment') }}" method="GET">
                                    <div class="row ">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="from">From Date</label>
                                                <input type="date" value="{{ $fromDate }}" name="from_date" id="from" class="form-control">

                                            </div>

                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="to_date"> To Date</label>
                                                <input type="date" value="{{ $toDate }}" name="to_date" id="to_date" class="form-control">

                                            </div>

                                        </div>
                                        <div class="col-4 my-4 pl-sm-0 ">
                                            <div class="form-group text-center p">
                                                <button type="submit" class="btn btn-outline-primary">Search</button>
                                                <button type="button" onclick="printDiv()" class="btn btn-outline-success">Print</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                </div>
                            </section>
                        </aside>

                    </div>

                    <div id="printArea">
                        <p style="font-size: 15px" class="text-dark font-weight-bold py-1 text-center">Payments Report from {{ $fromDate }} to {{ $toDate }}</p>

                        <table  class="display table table-bordered table-striped" {{-- id="dynamic-table" --}}>
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col"> User Name</th>
                                    <th scope="col"> User Email</th>
                                    <th scope="col">Car Engine</th>
                                    <th scope="col">Transaction Number</th>
                                    <th scope="col">Payment Amount</th>
                                    <th scope="col">Payment Time</th>
                                    <th scope="col">Payment Date</th>
                                    <th scope="col">Payment Method</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if( count($payments) > 0)



                                @foreach ($payments as $key =>$payment )
                           <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $payment->payBooking->bookingUser->name}}</td>
                            <td>{{ $payment->payBooking->bookingUser->email}}</td>
                            <td>{{ $payment->payBooking->bookingCar->car_engine}}</td>
                            <td>{{ $payment->transaction_id }}</td>
                            <td>{{ $payment->amount }}.00 TK</td>
                            <td>{{ date("h:i:s a", strtotime($payment->pay_time)) }}</td>
                            <td>{{ date("Y-M-d",strtotime($payment->pay_date ))}}</td>
                            <td class="text-center">{{ $payment->payment_method }}</td>

                            </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td colspan="7"><h4 class="text-danger">No data found on those date!.</h4></td>
                                </tr>

                                @endif


                        </table>

                    </div>
                </div>
            </div>
        </section>
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

<!-- page end-->

@endsection
