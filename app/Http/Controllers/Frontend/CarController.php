<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use App\Models\Insurance;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function cars(){

        $cars = Car::with('carBrand')->paginate(6);

        return view('frontend.pages.cars.cars',\compact('cars'));
    }

    public function singleCar($id){
        $car = Car::find($id);
        $insurances = Insurance::all();

        return view('frontend.pages.cars.singlecar',\compact('car','insurances'));

        }
    public function carSearch(Request $request){

        $search = $request->search;
        if($search){
            $cars = Car::where('name','like','%'.$search.'%')->paginate(6);
        }else{
            $cars = Car::with('carBrand')->paginate(6);
        }
       return view('frontend.pages.cars.cars',\compact('cars','search'));
    }

}
