@extends('driver.master')

@section('title')
Booking-Sheduale

@stop

@section('content')


            <div class="row animated fadeInRight "  style="color:#000000">
                <div class="col-sm-12">
                    <h4 class="text-dark"><b>Your Driving Shedules</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive ">
                                <table id="basic-table" class="data-table table table-striped nowrap  table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Booking Car</th>
                                        <th>Booking Date</th>
                                        <th>Return Date</th>
                                        <th>Total Days</th>
                                        <th class="text-center">Driving Response</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach ($booking as $key=> $item )
                                  <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $item->bookingCar->name }}</td>
                                    <td>{{ date("Y-m-d",strtotime($item->from_date)) }}</td>
                                    <td>{{ date("Y-m-d",strtotime($item->to_date)) }}</td>
                                    <td>@php
                                        $daysCalculation = (strtotime($item->to_date)-strtotime($item->from_date));
                                               $daysCalculation = round(($daysCalculation / (60 * 60 * 24))+1);
                                              echo $daysCalculation." Days";
                                           @endphp</td>


                                    <td class="text-center">
                                 @if($item->response=='confirmed')
                                    <span class=" text-success font-weight-bold">Confirmed  <i class="fas fa-check-circle text-success fa-1x"></i></span>
                                @else
                                    <span class="text-danger font-weight-bold">Rejected <i class="far fa-pause-circle text-red"></i></span>
                                @endif

                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                        <i class="fas fa-ellipsis-h"></i>
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      <li>
                                        <a
                                        href="{{route('employee.response',['id'=>$item->id,'response'=>'confirmed'])}}">Confirmed
                                    </a>
                                      </li>
                                    <li>
                                        <a
                                        href="{{route('employee.response',['id'=>$item->id,'response'=>'rejected'])}}">Reject
                                     </a>
                                    </li>

                                    </ul>
                                  </div>
                              </td>
                                    <td>
                                        <a class="btn btn-info " href="{{ route('show.booking',$item->id) }}"><i class="fa fa-eye text-dark"></i></a>
                                    </td>
                                </tr>


                                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

@stop
