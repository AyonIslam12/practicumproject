<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use Exception;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookinfForm ($id){
        $car = Car::find($id);
        return view('frontend.pages.cars.booking.carBooking',\compact('car'));
        }

        public function booking(Request $request){
            $request->validate([
                'from_date' => 'required',
                'from_time' => 'required',
                'to_date' => 'required',
                'to_time' => 'required',
                'fname' => 'required|min:4|max:20',
                'lname' => 'required|min:4|max:20',
                'email' => 'required|unique:bookings',
                'phone' => 'required',
            ]);

           try{
            $car = Car::find($request->car_id);
            $daysCalculation = strtotime($request->to_date)-strtotime($request->from_date);
            $daysCalculation = round($daysCalculation / (60 * 60 * 24));

            Booking::create([
                'car_id' => $request->car_id,
                'user_id' => auth()->user()->id,
                'from_date' => $request->from_date,
                'from_time' =>  $request->from_time,
                'to_date' => $request->to_date,
                'to_time' =>  $request->to_time,
                'fname' =>  $request->fname,
                'lname' =>  $request->lname,
                'email' =>  $request->email,
                'phone' =>  $request->phone,
                'details' =>  $request->details,
                'price_per_day' => $car->price_per_day,
                'total_price' => $car->price_per_day * $daysCalculation,

            ]);
            session()->flash('type','success');
            session()->flash('message','Your Booking is Successful.!!!');


           }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->back();

           }
           return redirect()->back();

        }
}
