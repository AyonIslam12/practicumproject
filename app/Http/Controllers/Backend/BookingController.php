<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\User;
use App\Models\Payment;
use App\Models\Backend\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Booking;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('bookingCar','bookingUser','bookinInsurance')->get();
       return view('backend.layouts.bookings.list', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('backend.layouts.bookings.create',compact('cars','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|after:from_date|date',
            'status' => 'required',
        ]);

            try{

        $car = Car::find($request->car_id);
        //DaysCalulation
        $daysCalculation = strtotime($request->to_date)-strtotime($request->from_date);
        $daysCalculation = round($daysCalculation / (60 * 60 * 24));

        //Booking Unique
        $user = Booking::where('user_id',$request->user_id)->exists();

        if($user){
            session()->flash('type','danger');
            session()->flash('message','This User Booked This Car Already');
            return \redirect()->back();
        }

        $cars = Booking::where('car_id', $request->car_id)->exists();
        //Booking Car Unique
        if($cars){
            session()->flash('type','danger');
            session()->flash('message','This Car Already Booked');
            return \redirect()->back();
        }
       Booking::create([
        'car_id' => $request->car_id,
        'user_id' => $request->user_id,
        'from_date' => $request->from_date,
        'to_date' => $request->to_date,
        'details' =>  $request->details,
        'price_per_day' => $car->price_per_day,
        'total_price' => $car->price_per_day * $daysCalculation,
        'status' => $request->status,
       ]);

       session()->flash('type', 'success');
       session()->flash('message', 'Booking Data Inserted Successfully');

    }catch(Exception $e){
        session()->flash('type', 'danger');
        session()->flash('message', $e->getMessage());
        return redirect()->back();
    }

       return redirect()->route('admin.booking.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);


       return view('backend.layouts.bookings.view', \compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try{
           $booking = Booking::find($id);
         if($booking){
            $booking->delete();

            session()->flash('type','success');
            session()->flash('message','Booking Data Delete Successfully.');
         }
       }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());

       }
       return \redirect()->back();
    }


    public function updateStatus($id,$status)
    {
        $booking = Booking::find($id);
        if($status === 'confirmed'){
            $booking->update(['status' => $status]);
        }else{
            $booking->update(['status' => $status]);
        }

        return redirect()->back();
    }


    public function paymentShow($id){

        $booking = Booking::find($id);
        $payments = Payment::where('booking_id' , $id)->get();


        return view('backend.layouts.bookings.bookingpayment',\compact('booking','payments'));
    }


     public function paymentCreate(Request $request){
         $request->validate([
             'amount' => 'required',
             'pay_date' => 'required',


         ]);
         try{
            $pay = Payment::create([
                 'booking_id' => $request->booking_id,
                 'amount' => $request->amount,
                 'payment_method' => $request->payment_method,
                 'transaction_id' =>\ucwords(Str::random(9)),
                 'pay_date' => $request->pay_date,
             ]);
            $pay->payBooking->update([
                'total_price' => $pay->paybooking->total_price - $request->amount,

            ]) ;

             session()->flash('type','success');
             session()->flash('message','Payment Success');
         }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return \redirect()->back();

         }
         return \redirect()->back();
     }


}
