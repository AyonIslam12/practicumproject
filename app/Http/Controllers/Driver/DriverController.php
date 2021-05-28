<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use App\Models\User;
use App\Rules\UpdatePasswordDriver;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

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
        }elseif($response === 'rejected'){
            $booking->update(['response' => $response]);
        }else{
            $booking->update(['response' => $response]);
        }

        toastr()->info("Your Resposne Submitted!!!.");
        return redirect()->back();

    }
    //booking single view
    public function show($id){
        $booking = Booking::find($id);


       return view('driver.pages.view', \compact('booking'));

    }
//user profile edit and update
    public function edit($id){
        $driver = User::where('id', \auth()->user()->id)->find($id);

       return view('driver.pages.editProfile',\compact('driver'));

    }
    public function update(Request $request, $id){
        $user = User::find(\auth()->user()->id);
        if (!$user) return redirect()->back();

        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'driver_experiance' => 'required',
        ]);
        try{
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('driver',$filename);
                }
                if (file_exists(public_path('uploads/driver/'.$user->image)))
                unlink(public_path('uploads/driver/'.$user->image));
            }else{
                $filename = $user->image;
            }


            $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' =>$filename,
            'address' =>$request->address,
            'driver_experiance' =>$request->driver_experiance,

            ]);

            toastr()->success('Your Profile Updated Successfully');
        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->back();
        }
        return redirect()->back();

    }

    public function editpassword(){
        return \view('driver.pages.editPassword');
    }

    public function updatePassword(Request $request)
    {
       $this->validate($request,[
           'old_password' => ['required', new UpdatePasswordDriver()],
           'password'=> 'required|min:6|confirmed'
       ]);

       try{

           auth()->user()->update([
                'password' => \bcrypt($request->password),
           ]);

           Auth::logout();
           toastr()->success('Your Password Reset Successfully');
           session()->flash('type','success');
           session()->flash('message',' Please Login Again.');
           return redirect()->route('employee.login.form');


       }catch(Throwable $exception){
           return redirect()->back();
       }


    }
}
