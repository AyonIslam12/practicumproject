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
    //user home method
    public function index(){
        toastr()->success('Welcome To Your Profile');
        return view('frontend.pages.profile.home');
    }

    //user profile editshow method
    public function profileEdit($id){
        $userEdit = User::find(\auth()->user()->id);
        return \view('frontend.pages.profile.edit',\compact('userEdit'));
    }

    //user profile update method
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

            toastr()->success('Your Profile Updated Successfully');
        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->back();
        }
        return redirect()->back();


    }

    //user passwordshow method
    public function password()
    {

      return \view('frontend.pages.profile.editPassword');

    }


    //user update password method
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
           toastr()->success('Your Password Reset Successfully');
           session()->flash('type','success');
           session()->flash('message',' Please Login Again.');
           return redirect()->route('website.user.login.form');


       }catch(Throwable $exception){
           return redirect()->back();
       }


    }

    //user Booking History method
    public function bookingHistory(){
        $bookingHistory = Booking::with('bookingCar')->where('user_id',auth()->user()->id)->orderBy('id','desc')->get();
        toastr()->success('Check Your Booking Info.');
        return view('frontend.pages.profile.bookingHistory',\compact('bookingHistory'));
    }

    //Testimonials Show Method
    public function showTestimonials(){
        toastr()->success('Manage Your Testimonials.');
        $posts = Testimonial::where('user_id', '=' , \auth()->user()->id)->get();


      return \view('frontend.pages.profile.testimonials.home',\compact('posts'));
    }

    //Testimonial Create Method method
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
    //Testimonial Delete Method
    public function deletetTestimonials ($id){


        try{
            $deleteTestimonials = Testimonial::find($id);
            if($deleteTestimonials){
                $deleteTestimonials->delete();

            session()->flash('type', 'success');
            session()->flash('message', 'Your Post Deleted!!!');
            }
           }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return \redirect()->back();
           }
           return \redirect()->back();

        }

    public function editTestimonials($id){
        $updateTestimonials = Testimonial::find($id);
        return \view('frontend.pages.profile.testimonials.editPost' ,\compact('updateTestimonials'));
    }
    public function updateTestimonials(Request $request, $id){

        $Testimonials = Testimonial::find($id);
        if (!$Testimonials) return redirect()->back();
       $request->validate([
            'message' => 'required',
            'postdate' => 'date',

        ]);

        try{



        $Testimonials->update([

            'message' => $request->message,
            'postdate' => $request->postdate,

        ]);

        session()->flash('type', 'success');
        session()->flash('message','You Post Update Successfully.');


        }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return \redirect()->route('website.user.testimonials.show');

        }
        return \redirect()->route('website.user.testimonials.show');

    }


}
