<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
   /*  protected $fillable = [
        'car_name',
        'car_brand',
        'car_model',
        'car_color',
        'sit_capacity',
        'n_plate',

    ]; */
    protected $guarded = [];
}
