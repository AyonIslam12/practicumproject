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



    public function show($id)
    {
        $booking = Booking::find($id);


       return view('backend.layouts.bookings.view', \compact('booking'));
    }


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
        }elseif($status === 'completed'){
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


     public function paymentCreate(Request $request)
     {
         $request->validate([
             'amount' => 'required',
         ]);

         try{
            $booking = Booking::where('id', '=', $request->booking_id)->first();


            $amount = $request->input('amount');

            $payments = Payment::where('booking_id', $booking->id)->sum('amount');


            $totalAmount = $booking->total_price - $payments;

            if( $amount >  $totalAmount   ){
                session()->flash('type','danger');
                session()->flash('message',"You can not pay more then " . $booking->total_price.' TK.');
                return \redirect()->back();
                }elseif( $amount == 0){
                    session()->flash('type','danger');
                    session()->flash('message',' You can not pay only zero amount');
                    return \redirect()->back();

                }

                $pay = Payment::create([
                    'booking_id' => $booking->id,
                    'amount' => $amount,
                    'payment_method' => $request->payment_method,
                    'transaction_id' =>\ucwords(Str::random(9)),
                    'pay_time' => $request->pay_time,
                    'pay_date' => $request->pay_date,
                ]);
               $pay->payBooking->update([
                   'due' => $totalAmount - $amount,

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
