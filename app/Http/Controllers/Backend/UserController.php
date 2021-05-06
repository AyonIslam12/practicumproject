<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm(){
        return view('backend.auth.login');
    }


    public function login(Request $request){


        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:16',

        ]);


        $loginData=$request->only('email','password');
        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
          return redirect()->route('admin.dashboard');
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
          return redirect()->route('admin.login-form');

    }


    // User Manage Methods Below
    public function index(){
        $users = User::where('role','=','customer')->get();
        return view('backend.layouts.user.list',\compact('users'));
    }

    public function show($id){
        $user = User::find($id);
       return \view('backend.layouts.user.show',\compact('user'));

    }


    public function delete($id){
        try{
         $user = User::find($id);
         if($user){

            if (file_exists(public_path('uploads/users/'.$user->image))) {
                unlink(public_path('uploads/users/'.$user->image));
            }
             $user->delete();

         session()->flash('type', 'success');
         session()->flash('message', 'User Delete Successfully');
         }
        }catch(Exception $e){
         session()->flash('type', 'danger');
         session()->flash('message', $e->getMessage());
         return \redirect()->route('admin.user.list');
        }
        return \redirect()->route('admin.user.list');

     }


}
