<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[

        'car_id',
        'user_id',
        'from_date',
        'from_time',
        'to_date',
        'to_time',
        'price_per_day',
        'total_price',
        'fname',
        'lname',
        'email',
        'phone',
        'details',
        'status',
    ];
    public function bookingCar(){
        return $this->belongsTo(Car::class,'car_id','id');
    }
}
