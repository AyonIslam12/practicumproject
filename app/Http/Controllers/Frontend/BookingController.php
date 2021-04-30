<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use App\Models\Backend\Car;
use Illuminate\Http\Request;
use App\Models\Backend\Booking;
use App\Mail\BokkingNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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


            $car = Car::find($request->car_id);
            //DaysCalulation
            $daysCalculation = strtotime($request->to_date)-strtotime($request->from_date);
            $daysCalculation = round($daysCalculation / (60 * 60 * 24));

            //Make Date Fomate
           $fromDate = date("Y-m-d", strtotime($request->from_date));
            $toDate = date("Y-m-d", strtotime($request->to_date));

            $checkBook = Booking::query()->where('car_id', $request->car_id);

            $checkBook->where(function ($query) use ($fromDate, $toDate) {
                $query->whereBetween('from_date', [$fromDate, $toDate])
                    ->orWhereBetween('to_date', [$fromDate, $toDate]);
            });

             $checkBook = $checkBook->get();


             if ($checkBook->count() == 0){
               $booking = Booking::create([
                    'car_id' => $request->car_id,
                    'user_id' => auth()->user()->id,
                    'from_date' => $request->from_date,
                    'to_date' => $request->to_date,
                    'details' =>  $request->details,
                    'price_per_day' => $car->price_per_day,
                    'total_price' => $car->price_per_day * $daysCalculation,

                ]);
                Mail::to(auth()->user()->email)->send(new BokkingNotification($booking));
                session()->flash('type','success');
                session()->flash('message','Your Booking is Successful.!!!');
               return redirect()->back();
             }else{
                session()->flash('type','danger');
                session()->flash('message','Sorry,This Car is Already Booked, For Those Specific Days,Try Another Date .');
               return redirect()->back();
             }


        }
}
