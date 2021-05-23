<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role == 'driver'){
                return $next($request);
            }else{
                Auth::logout();
                session()->flash('type','danger');
                session()->flash('message','Sorry You are not Driver.');
                return redirect()->route('employee.login.form');
            }
        }else{
            toastr()->warning("You Have Login First");
            return \redirect()->route('employee.login.form');
        }
    }
}
