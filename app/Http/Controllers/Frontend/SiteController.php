<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Car;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view('frontend.pages.home');
    }

    public function about(){
        $title = "About-Us";
        return view('frontend.pages.about',\compact('title'));
    }
    public function services(){

        return view('frontend.pages.services');
    }
   /*  public function pricing(){
        $title = "Car-Pricing";
        return view('frontend.pages.pricing',\compact('title'));
    } */

   /*  public function blogs(){
        $title = "Our-Blogs";
        return view('frontend.pages.blogs',\compact('title'));
    } */
    public function faqPage(){
        return view('frontend.pages.faqPage');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }



}
