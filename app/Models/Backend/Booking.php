<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[

        'car_id',
        'booking_time',
        'booking_date',
        'return_time',
        'return_date',
        'booking_advanced',
        'booking_total',
    ];
    public function bookingCar(){
        return $this->belongsTo(Car::class,'car_id','id');
    }
}
