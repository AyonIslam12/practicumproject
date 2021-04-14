<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginForm (){
        $title = "User-Login";
        return view('frontend.auth.login',\compact('title'));
    }
}
