<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'offer_type' ,

    ];
   public function offerCar(){
        return $this->belongsTo(Car::class,'car_id','id');
    }

}
