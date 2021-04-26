<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use Exception;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::with('bookingCar')->get();
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
        return view('backend.layouts.bookings.create',compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Booking::create([
            'booking_time' => $request->booking_time,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'return_time' => $request->return_time,
            'return_date' => $request->return_date,
            'booking_advanced' => $request->booking_advanced,
            'booking_total' => $request->booking_total,
            'car_id'=>$request->car_id
       ]);
       return redirect()->route('admin.booking.manage')->with('success','Booking Data Inserted Successfully');
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
           $book = Booking::find($id);
           $book->delete();

       }catch(Exception $e){

       }
       return \redirect()->back()->with('success','Booking data deleted successfully');
    }
}
