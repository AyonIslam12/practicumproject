<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function dashboard(){
        return \view('driver.pages.dashboard');

    }
    public function showLoginForm(){
        return \view('driver.pages.loginForm');
    }

    public function Dologin(Request $request){
        $loginData=$request->only('email','password');
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            toastr()->info("Welcome To Driver Panel.");
          return redirect()->route('employee.dashboard');
        }else{
          session()->flash('type','danger');
          session()->flash('message','These credentials do not match our records.');
          return redirect()->back();
      }

    }


    public function logout(){
        Auth::logout();

          session()->flash('type','success');
          session()->flash('message','Logout Successful.');
          return redirect()->route('employee.login.form');

    }


    public function bookingList(){
        //$car = Car::where('user_id',\auth()->user()->id )->get();
        $booking = Booking::where('driver_id',auth()->user()->id)->get();
          return \view('driver.pages.bookingList', \compact('booking'));
    }

    public function  updateResponse($id,$response){
        $booking = Booking::find($id);
        if($response === 'confirmed'){
            $booking->update(['response' => $response]);
        }else{
            $booking->update(['response' => $response]);
        }
        toastr()->info("Your Resposne Submitted!!!.");
        return redirect()->back();

    }
}
