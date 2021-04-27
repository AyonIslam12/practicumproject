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
                'from_date' => 'required|date',
                'to_date' => 'required|after:from_date|date',
            ]);

           try{
            $car = Car::find($request->car_id);
            //DaysCalulation
            $daysCalculation = strtotime($request->to_date)-strtotime($request->from_date);
            $daysCalculation = round($daysCalculation / (60 * 60 * 24));

            //Booking Unique
            $user = Booking::where('user_id',auth()->user()->id)->where('car_id', $request->car_id)->exists();

            if($user){
                session()->flash('type','danger');
                session()->flash('message','You Already Booked This Car');
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
                'user_id' => auth()->user()->id,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
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
