<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function cars(){
        $all_cars = Car::all();
        $title = "All-Cars";
        return view('frontend.pages.cars',\compact('title','all_cars'));
    }

    public function singleCar($id){
        $car = Car::find($id);
        $title = "Single-Car";
        return view('frontend.pages.singlecar',\compact('title','car'));

        }
}
