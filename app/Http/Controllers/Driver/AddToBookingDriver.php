<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class AddToBookingDriver extends Controller
{
   public function addToBooking($id){
    $driver = User::where('role', '=', 'driver')->orderBy('id','desc')->paginate(2);
    $bookingAdd = Booking::find($id);

    return view('backend.layouts.bookings.driver.addDriver',\compact('driver','bookingAdd'));

   }
   public function AddDriver(Request $request, $id){

     $addDriver = Booking::find($id);

      //Make Date Fomate
      $fromDate = date("Y-m-d", strtotime($addDriver->from_date));
      $toDate = date("Y-m-d", strtotime($addDriver->to_date));

      $checkBook = Booking::query()->where('driver_id', $request->driver_id);

      $checkBook->where(function ($query) use ($fromDate, $toDate) {
          $query->whereBetween('from_date', [$fromDate, $toDate])
              ->orWhereBetween('to_date', [$fromDate, $toDate]);
      });

      $checkBook = $checkBook->get();

      if ($checkBook->count() == 0){
     $addDriver->update([
            'driver_id' =>$request->driver_id,
     ]);

     toastr()->success("Driver Booked Successfully.");
     return \redirect()->back();
      }else{
        toastr()->warning("This Driver Already Booked For Drived.");
        return \redirect()->back();
      }


   }
}
