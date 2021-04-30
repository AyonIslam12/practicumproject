<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function index(){
        return view('frontend.pages.profile.home');
    }
    public function profileEdit($id){
        $userEdit = User::find($id);
        return \view('frontend.pages.profile.edit',\compact('userEdit'));
    }
    public function profileUpdate(Request $request,$id){
        $user = User::find($id);
        if (!$user) return redirect()->back();

        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);


        try{
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('users',$filename);
                }
                if (file_exists(public_path('uploads/users/'.$user->image)))
                unlink(public_path('uploads/users/'.$user->image));
            }else{
                $filename = $user->image;
            }


            $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' =>$filename,
            'address' =>$request->address,

            ]);
            session()->flash('type','success');
            session()->flash('message','Your Profile Updated Successfully');
        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->back();
        }
        return redirect()->back();


    }

   /*  public function updatePassword($id){
        $updatePassword = User::find($id);
      return \view('frontend.pages.profile.updatePassword',\compact('updatePassword'));

    } */

    public function bookingHistory(){
        $bookingHistory = Booking::with('bookingCar')->where('user_id',auth()->user()->id)->get();
      return view('frontend.pages.profile.bookingHistory',\compact('bookingHistory'));
    }
}
