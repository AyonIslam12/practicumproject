<?php

namespace App\Http\Controllers\Backend;

use Exception;
use App\Models\Backend\Car;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Backend\Brand;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('carBrand')->get();
        return view('backend.layouts.cars.lists',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
       return view('backend.layouts.cars.create',\compact('brands'));
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
            'name' => 'required|min:4',
            'model' => 'required',
            'model_year' => 'required',
            'color' => 'required',
            'price_per_day' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'luggage' => 'required',
            'fuel' => 'required',
            'status' => 'required',
        ]);

        try{
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
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'car_engine' =>\ucwords(Str::random(10)),
            'model_year' => $request->model_year,
            'color' => $request->color,
            'price_per_day' => $request->price_per_day,
            'discount_offer' => $request->discount_offer,
            'image' => $filename,
            'air_condition' => $request->air_condition,
            'power_deadlock' => $request->power_deadlock,
            'anti_lockbraking' => $request->anti_lockbraking,
            'brake_assist' => $request->brake_assist,
            'power_steering' => $request->power_steering,
            'cd_player' => $request->cd_player,
            'central_looking' => $request->central_looking,
            'crash_sensor' => $request->crash_sensor,
            'mileage' => $request->mileage,
            'transmission' => $request->transmission,
            'seats' => $request->seats,
            'luggage' => $request->luggage,
            'fuel' => $request->fuel,
            'decs' => $request->decs,
            'status' => $request->status,

        ]);
        session()->flash('type','success');
        session()->flash('message','New Car Inserted Successfully');

        }catch(Exception $e){

            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());

            return redirect()->route('admin.car.manage');

        }
        return redirect()->route('admin.car.manage');
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
        $brands = Brand::all();
        if($car)
        return view('backend.layouts.cars.edit',\compact('car','brands'));
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
            'model' => 'required',
            'model_year' => 'required',
            'color' => 'required',
            'price_per_day' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'luggage' => 'required',
            'fuel' => 'required',
            'status' =>'required'
        ]);

          try{
            if($request->hasFile('image')){
                $file = $request->file('image');
                if($file->isValid()){
                    $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
                    $file->storeAs('cars',$filename);
                }
                if (file_exists(public_path('uploads/cars/'.$cars->image)))
                unlink(public_path('uploads/cars/'.$cars->image));
            }else{
                $filename = $cars->image;
            }

            $cars->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'model' => $request->model,
            'model_year' => $request->model_year,
            'color' => $request->color,
            'price_per_day' => $request->price_per_day,
            'discount_offer' => $request->discount_offer,
            'image' => $filename,
            'air_condition' => $request->air_condition,
            'power_deadlock' => $request->power_deadlock,
            'anti_lockbraking' => $request->anti_lockbraking,
            'brake_assist' => $request->brake_assist,
            'power_steering' => $request->power_steering,
            'cd_player' => $request->cd_player,
            'central_looking' => $request->central_looking,
            'crash_sensor' => $request->crash_sensor,
            'mileage' => $request->mileage,
            'transmission' => $request->transmission,
            'seats' => $request->seats,
            'luggage' => $request->luggage,
            'fuel' => $request->fuel,
            'decs' => $request->decs,
            'status' => $request->status,
            ]);
            session()->flash('type','success');
            session()->flash('message','Car Info Updated Successfully');

          }catch(Exception $e){

            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());
            return redirect()->route('admin.car.manage');

          }

        return redirect()->route('admin.car.manage');
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

            if ($car) {
                if (file_exists(public_path('uploads/cars/'.$car->image))) {
                    unlink(public_path('uploads/cars/'.$car->image));
                }
                $car->delete();
            }
            session()->flash('type', 'success');
            session()->flash('message', 'Car Data Deleteed successfully');

        }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
        }
        return \redirect()->back();
    }
}
