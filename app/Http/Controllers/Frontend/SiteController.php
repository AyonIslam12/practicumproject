<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Car;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
         $results =Testimonial::with('userTestimonials')->get();
         $brands = Brand::all();
         $cars = Car::all();

        return view('frontend.pages.home',\compact('results','brands','cars'));
    }

    public function about(){
        $title = "About-Us";
        return view('frontend.pages.about',\compact('title'));
    }
    public function services(){

        return view('frontend.pages.services');
    }

    public function faqPage(){
        return view('frontend.pages.faqPage');
    }

    public function contact(){

        return view('frontend.pages.contact');
    }



}
