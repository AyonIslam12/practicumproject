<?php

namespace App\Models\Backend;

use App\Models\Insurance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[

        'car_id',
        'user_id',
        'driver_id',
        'insurance_id',
        'insurance_fee',
        'from_date',
        'to_date',
        'price_per_day',
        'insurance_fee',
        'total_price',
        'due',
        'details',
        'response`',
        'status',
    ];
    public function bookingCar(){
        return $this->belongsTo(Car::class,'car_id','id');
    }
    public function bookingUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function bookingDriver(){
        return $this->belongsTo(User::class,'driver_id','id');
    }
    public function bookinInsurance(){
        return $this->belongsTo(Insurance::class,'insurance_id','id');
    }
}
