<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand_id',
        'model',
        'model_year',
        'price_per_day',
        'discount_offer',
        'color',
        'air_condition',
        'power_deadlock',
        'anti_lockbraking',
        'brake_assist',
        'power_steering',
        'cd_player',
        'central_looking',
        'crash_sensor',
        'image',
        'mileage',
        'transmission',
        'seats',
        'luggage',
        'fuel',
        'decs',
        'status',


    ];
    //protected $guarded = [];

    public function carBrand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
