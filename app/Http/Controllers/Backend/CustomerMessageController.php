<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CustomerMessage;
use Exception;
use Illuminate\Http\Request;

class CustomerMessageController extends Controller
{
    public function index(){
        $messages = CustomerMessage::with('userMessage')->get();
       return \view('backend.layouts.CustomerMessage.list',\compact('messages'));
    }
    public function show($id){
        $message = CustomerMessage::find($id);
        return \view('backend.layouts.CustomerMessage.view',\compact('message'));

    }
    public function delete($id){


        try{
            $message = CustomerMessage::find($id);
            if($message){
                $message->delete();

            session()->flash('type', 'success');
            session()->flash('message', 'Customer Message Delete Successfully');
            }
        }catch(Exception $e){
            session()->flash('type', 'danger');
            session()->flash('message', $e->getMessage());
            return \redirect()->back();
        }
        return \redirect()->back();

   }
}
