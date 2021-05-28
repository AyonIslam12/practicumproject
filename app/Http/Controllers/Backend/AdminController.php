<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use App\Models\Driver;
use App\Models\Insurance;
use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $user= User::where('role','=','customer')->get();
        $driver = User::where('role', '=', 'driver')->get();
        $car = Car::where('status' , '=' , 'active')->get();
        $insurance = Insurance::where('status' , '=' , 'active')->get();
        $booking = Booking::all();
        $payment = Payment::all();
        return view('backend.layouts.dashboard', \compact('user','driver','car','insurance','booking','payment'));
    }

    public function profile(){
       return \view('backend.admin.profile');
    }
    public function editShow($id){
        $adminEdit = User::find(\auth()->user()->id);
       return \view('backend.admin.edit',\compact('adminEdit'));
    }

    public function updateProfile(Request $request,$id){
        $adminUpdate = User::find(\auth()->user()->id);
        if (!$adminUpdate) return redirect()->back();

        $request->validate([
            'name' => 'required|string|min:4',
            'phone' => 'required',
            'address' => 'required',
        ]);

        try{
           /*  if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('users',$filename);
                }
                if (file_exists(public_path('uploads/users/'.$adminUpdate->image)))
                unlink(public_path('uploads/users/'.$adminUpdate->image));
            }else{
                $filename = $adminUpdate->image;
            } */


            $adminUpdate->update([
            'name' => $request->name,
            'phone' => $request->phone,
         /*    'image' =>$filename, */
            'address' =>$request->address,

            ]);
            toastr()->success("Your Profile Updated Successfully.");

        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->route('admin.profile');
        }
        return redirect()->route('admin.profile');

    }

}
