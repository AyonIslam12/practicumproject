<?php

namespace App\Models;

use App\Models\Backend\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'amount',
        'payment_method',
        'transaction_id',
        'pay_date',
        'status',

    ];

    public function payBooking(){
        return $this->belongsTo(Booking::class,'booking_id','id');
    }
}
