<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.layouts.dashboard');
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
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('users',$filename);
                }
                if (file_exists(public_path('uploads/users/'.$adminUpdate->image)))
                unlink(public_path('uploads/users/'.$adminUpdate->image));
            }else{
                $filename = $adminUpdate->image;
            }


            $adminUpdate->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'image' =>$filename,
            'address' =>$request->address,

            ]);
            session()->flash('type','success');
            session()->flash('message','Your Profile Updated Successfully');
        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->route('admin.profile');
        }
        return redirect()->route('admin.profile');

    }

}
