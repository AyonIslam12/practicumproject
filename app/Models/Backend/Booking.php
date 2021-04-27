<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[

        'car_id',
        'user_id',
        'from_date',
        'to_date',
        'price_per_day',
        'total_price',
        'details',
        'status',
    ];
    public function bookingCar(){
        return $this->belongsTo(Car::class,'car_id','id');
    }
    public function bookingUser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
