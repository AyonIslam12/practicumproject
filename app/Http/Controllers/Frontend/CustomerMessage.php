<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage as ModelsCustomerMessage;
use Exception;
use Illuminate\Http\Request;

class CustomerMessage extends Controller
{
    public function sendMessage(Request $request){
        $request->validate([
            'message' => 'required'

        ]);

       try{
        ModelsCustomerMessage::create([
            'user_id' => \auth()->user()->id,
            'message' => $request->message
        ]);
        session()->flash('type','success');
        session()->flash('message','Your Message Send Successfully');
       }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
        return \redirect()->back();

       }

       return \redirect()->back();
    }
}
