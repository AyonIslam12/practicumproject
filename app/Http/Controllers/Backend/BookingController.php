<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use App\Models\User;
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
        $bookings = Booking::with('bookingCar','bookingUser')->get();
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
}
