<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registrationForm(){

        return view('frontend.auth.registration');
    }

    public function register (Request $request){

      $request->validate([
        'name' => 'required|string|min:4',
        'email' => 'required|email|unique:users',
        'phone' => 'required|min:11|max:11',
        'password' => 'required|min:6|max:16',
        'password' => 'required|min:6|max:16|confirmed',

      ]);


      try{

            $filename = " ";
        if($request->hasFile('image')){
            $image = $request->file('image');
            if($image->isValid()){
                $filename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
                $image->storeAs('users',$filename);
            }
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'customer',
            'password' =>bcrypt($request->password),
            'image' =>$filename,
            'address' =>$request->address,
            ]);

            session()->flash('type','success');
            session()->flash('message','Your Registration is Successfull,Now You Can Login');
      }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
        return \redirect()->back();

      }
      return \redirect()->back();


    }

    public function loginForm (){
        $title = "User-Login";
        return view('frontend.auth.login',\compact('title'));
    }

    public function doLogin (Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:16',
          ]);

          $loginData=$request->only('email','password');
          if(Auth::attempt($loginData)){


            session()->flash('type','success');
            session()->flash('message','User Login Success.');
            return redirect()->intended(route('website.home'));
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
        return redirect()->route('website.user.login.form')->with('success','Logout Successful.');

    }
}
