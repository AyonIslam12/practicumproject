<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::all();
        return \view('backend.layouts.payment.list',\compact('payments'));
    }
    public function show ($id){
        $payment = Payment::find($id);

        return \view('backend.layouts.payment.view',\compact('payment'));
    }

    public function delete($id){
        $payment = Payment::find($id);
        if($payment){
            $payment->delete();
        }
        \session()->flash('type','success');
        \session()->flash('message','Payment Delete Successfully');
        return \redirect()->back();
    }

}
