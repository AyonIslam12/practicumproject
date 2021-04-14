<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Car;
use App\Models\Backend\Offer;
use Exception;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $offers= Offer::with('offerCar')->get();

       return view('backend.layouts.offer.list', \compact('offers'));
    }
    public function create(){
        $cars = Car::all();
       return view('backend.layouts.offer.create',\compact('cars'));
    }
    public function store(Request $request){

      try{
        Offer::create([
            'offer_type'=>$request->offer_type,
            'car_id'=>$request->car_id,

        ]);
      }catch(Exception $e){
          \session()->flash('type','danger');
          \session()->flash('message',$e->getMessage());
      }
        return redirect()->route('admin.offer.manage')->with('success','Offer data createed successfully');

    }
}
