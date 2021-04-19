<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Car;
use Exception;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('backend.layouts.cars.lists',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.layouts.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:4',
            'brand' => 'required|string',
            'model' => 'required',
            'color' => 'required',
            'price' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'luggage' => 'required',
            'fuel' => 'required',


        ]);

        $filename = " ";
        if($request->hasFile('image')){
            $image = $request->file('image');
            if($image->isValid()){
                $filename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
                $image->storeAs('cars',$filename);
            }
        }
        Car::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'model' => $request->model,
            'color' => $request->color,
            'price' => $request->price,
            'image' => $filename,
            'mileage' => $request->mileage,
            'transmission' => $request->transmission,
            'seats' => $request->seats,
            'luggage' => $request->luggage,
            'fuel' => $request->fuel,
            'decs' => $request->decs,

        ]);
        return redirect()->route('admin.car.manage')->with('success','New Car Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('backend.layouts.cars.view', \compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        if($car)
        return view('backend.layouts.cars.edit',\compact('car'));
        else
        return \redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cars = Car::find($id);
        if (!$cars) return redirect()->back();

        $request->validate([
            'name' => 'required|string|min:4',
            'brand' => 'required|string',
            'model' => 'required',
            'color' => 'required',
            'price' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'luggage' => 'required',
            'fuel' => 'required',


        ]);

          try{
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('cars',$filename);
                }
                if (file_exists(public_path('uploads/cars/'.$cars->image))) unlink(public_path('uploads/cars/'.$cars->image));
            }else{
                $filename = $cars->image;
            }

            $cars->update([
                'name' => $request->name,
                'brand' => $request->brand,
                'model' => $request->model,
                'color' => $request->color,
                'price' => $request->price,
                'image' => $filename,
                'mileage' => $request->mileage,
                'transmission' =>$request->transmission,
                'seats' => $request->seats,
                'luggage' => $request->luggage,
                'fuel' => $request->fuel

            ]);
          }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());

          }

        return redirect()->route('admin.car.manage')->with('success',' Car Info Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $car = Car::find($id);
            if(file_exists(public_path('uploads/cars/'.$car->image))) unlink(public_path('uploads/cars/'.$car->image));
            $car->delete();

        }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
        }
        return \redirect()->back()->with('success','Car Data Deleteed successfully');
    }
}
