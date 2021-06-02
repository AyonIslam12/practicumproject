<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ForgetPassword extends Controller
{

    //Forget Password start
    public function forgetPassword(){
        return view('forget-passowrd.forget-password');

      }
    public function forgetPasswordForDriver(){
        return view('forget-passowrd.driver-forget-password');

      }
      public function forgetPasswordLink(Request $request){
          $request->validate([
              'email' => 'required|email'

          ]);
         $user = User::where('email', $request->email)->first();


         if($user){
         Password::sendResetLink(
          $request->only('email')
          );
          toastr()->success("You will get a reset link in your email");
             return \redirect()->back();

         }else{
          toastr()->error('Sorry, Your e-mail is invalid');
             return \redirect()->back();
         }
      }


      public function passwordReset($p_token, $p_email){
          $token = $p_token;
           $email = $p_email;

          return view('forget-passowrd.reset-password', \compact('token','email'));
      }
      public function resetPassword(Request $request){
          $request->validate([
              'token' => 'required',
              'email' => 'required|email',
              'password' => 'required|min:6|confirmed',
          ]);
          $user = User::where('email', $request->email)->first();

         if($user->role == 'driver'){
          Password::reset(
              $request->only('email', 'password', 'password_confirmation', 'token'),
              function ($user, $password) use ($request) {
                  $user->forceFill([
                      'password' => bcrypt($password)
                  ])->setRememberToken(Str::random(60));

                  $user->save();


              });

              toastr()->success("Your passowrd reset successfully");
              return \redirect()->route('employee.login.form');
         }elseif($user->role == 'customer'){

          Password::reset(
              $request->only('email', 'password', 'password_confirmation', 'token'),
              function ($user, $password) use ($request) {
                  $user->forceFill([
                      'password' => bcrypt($password)
                  ])->setRememberToken(Str::random(60));

                  $user->save();


              });
          toastr()->success("Your passowrd reset successfully");
          return \redirect()->route('website.user.login.form');

         }

      }
}
