<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use Exception;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function index(){
        $brands = Brand::paginate(6);
        return view('backend.layouts.cars.brand.manage',\compact('brands'));
    }
    public function create(){
        return view('backend.layouts.cars.brand.create');
    }
    public function store(Request $request){
      $request->validate([
          'brand' => 'required|min:2|max:20',
          'status' => 'required'
      ]);

      try{
        Brand::create([
            'brand' => $request->brand,
            'status' => $request->status


          ]);
          session()->flash('type','success');
          session()->flash('message','Car Brand Inserted Successfully.');
      }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
        return \redirect()->route('admin.car.brand.manage');

      }
      return \redirect()->route('admin.car.brand.manage');
    }

    public function edit($id){
        $brand = Brand::find($id);
        if($brand)
       return view('backend.layouts.cars.brand.edit',\compact('brand'));

       else
       return \redirect()->back();
    }

    public function update(Request $request,$id){
        $brand= Brand::find($id);

        $request->validate([
            'brand' => 'required|min:2|max:20',
            'status' => 'required'
        ]);

        try{
            $brand->update([
            'brand' => $request->brand,
            'status' => $request->status
            ]);
            session()->flash('type','success');
            session()->flash('message','Car Brand Updated Successfully.');

        }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
        return \redirect()->route('admin.car.brand.manage');

        }
        return \redirect()->route('admin.car.brand.manage');

    }

    public function destroy($id){
       try{
        $brand = Brand::find($id);
        if($brand){
            $brand->delete();

        session()->flash('type', 'success');
        session()->flash('message', 'Brand Delete Successfully');
        }
       }catch(Exception $e){
        session()->flash('type', 'danger');
        session()->flash('message', $e->getMessage());
       }
       return \redirect()->route('admin.car.brand.manage');

    }
}
