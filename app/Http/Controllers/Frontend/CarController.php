<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Booking;
use App\Models\Backend\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function cars(){

        $cars = Car::with('carBrand')->paginate(6);

        return view('frontend.pages.cars.cars',\compact('cars'));
    }

    public function singleCar($id){
        $car = Car::find($id);

        return view('frontend.pages.cars.singlecar',\compact('car'));

        }

}
