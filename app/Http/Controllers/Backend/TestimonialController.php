<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testmonials = Testimonial::with('userTestimonials')->get();
        return \view('backend.layouts.testimonial.list',\compact('testmonials'));
    }


    public function dedele($id){
        try{
         $testmonials = Testimonial::find($id);
         if($testmonials){
             $testmonials->delete();

         session()->flash('type', 'success');
         session()->flash('message', 'Testimonials  Delete Successfully');
         }
        }catch(Exception $e){
         session()->flash('type', 'danger');
         session()->flash('message', $e->getMessage());
         return \redirect()->back();
        }
        return \redirect()->back();

     }
}
