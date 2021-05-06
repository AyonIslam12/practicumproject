<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $drivers = Driver::all();
        return \view('backend.layouts.drivers.list',\compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:drivers',
            'phone' => 'required|min:11|max:11',
            'nid_number' => 'required|min:11|max:16|unique:drivers',
            'password' => 'required|min:6|max:16',
            'password' => 'required|min:6|max:16|confirmed',
            'address' => 'required',
        ]);
        try{

            $filename = " ";
        if($request->hasFile('image')){
            $image = $request->file('image');
            if($image->isValid()){
                $filename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
                $image->storeAs('driver',$filename);
            }
        }

        Driver::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nid_number' => $request->nid_number,
            'role' => 'driver',
            'password' =>bcrypt($request->password),
            'image' =>$filename,
            'address' =>$request->address,
            ]);

            session()->flash('type','success');
            session()->flash('message','Driver Data Inserted Successfully');
      }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
        return \redirect()->back();

      }
      return \redirect()->back();

    }



    public function show($id)
    {
        $driver = Driver::find($id);
        return view('backend.layouts.drivers.view', \compact('driver'));
    }


    public function edit($id)
    {
        $driver = Driver::find($id);
        if($driver)
       return view('backend.layouts.drivers.edit', \compact('driver'));
       else
       return \redirect()->back();
    }


    public function update(Request $request, $id)
    {
            $driver = Driver::find($id);
            if (!$driver) return redirect()->back();
        $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required',
            'phone' => 'required',
            'nid_number' => 'required',
            'address' => 'required',
        ]);
        try{
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('users',$filename);
                }
                if (file_exists(public_path('uploads/users/'.$driver->image)))
                unlink(public_path('uploads/users/'.$driver->image));
            }else{
                $filename = $driver->image;
            }


            $driver->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'nid_number' => $request->nid_number,
            'image' =>$filename,
            'address' =>$request->address,

            ]);
            session()->flash('type','success');
            session()->flash('message','Driver Data Updated Successfully');
        }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->route('admin.driver.list');
        }
        return redirect()->route('admin.driver.list');
    }


    public function destroy($id)
    {
        try{
            $driver = Driver::find($id);
            if($driver){

            if (file_exists(public_path('uploads/users/'.$driver->image))) {
                unlink(public_path('uploads/users/'.$driver->image));
            }
                $driver->delete();

            session()->flash('type', 'success');
            session()->flash('message', 'Driver Delete Successfully');
            }
           }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return \redirect()->route('admin.driver.list');
           }
           return \redirect()->route('admin.driver.list');

    }
}
