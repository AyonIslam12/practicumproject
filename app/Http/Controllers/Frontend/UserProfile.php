<?php

namespace App\Http\Controllers\Frontend;

use Exception;
use Throwable;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Rules\UpdatePassword;
use App\Models\Backend\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Controller
{
    public function index(){
        return view('frontend.pages.profile.home');
    }


    public function profileEdit($id){
        $userEdit = User::find(\auth()->user()->id);
        return \view('frontend.pages.profile.edit',\compact('userEdit'));
    }


    public function profileUpdate(Request $request,$id){
        $user = User::find(\auth()->user()->id);
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

    public function password()
    {

      return \view('frontend.pages.profile.editPassword');

    }
    public function updatePassword(Request $request)
    {
       $this->validate($request,[
           'old_password' => ['required', new UpdatePassword()],
           'password'=> 'required|min:6|confirmed'
       ]);

       try{

           auth()->user()->update([
                'password' => \bcrypt($request->password),
           ]);

           Auth::logout();
           session()->flash('type','success');
           session()->flash('message',' Your Password Updated Successfully,Please Login Again.');
           return redirect()->route('website.user.login.form');


       }catch(Throwable $exception){
           return redirect()->back();
       }


    }

    public function bookingHistory(){
        $bookingHistory = Booking::with('bookingCar')->where('user_id',auth()->user()->id)->get();
      return view('frontend.pages.profile.bookingHistory',\compact('bookingHistory'));
    }

    //Testimonials
    public function showTestimonials(){
        $posts = Testimonial::where('user_id', '=' , \auth()->user()->id)->get();


      return \view('frontend.pages.profile.testimonials',\compact('posts'));
    }

    public function postTestimonials(Request $request){

        $request->validate([
            'message' => 'required',
            'postdate' => 'required|date',

        ]);


        try{
            Testimonial::create([
                'user_id' => \auth()->user()->id,
                'message' => $request->message,
                'postdate' => $request->postdate,

            ]);
            session()->flash('type', 'success');
            session()->flash('message','You Post Successfully.');


        }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return \redirect()->route('website.user.testimonials.show');
     }
      return \redirect()->route('website.user.testimonials.show');
}
}
