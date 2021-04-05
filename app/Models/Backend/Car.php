<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
   /*  protected $fillable = [
        'name',
        'brand',
        'model',
        'color',
        'price',
        'image',
        'mileage',
        'transmission',
        'seats',
        'luggage',
        'fuel'
        'decs'


    ]; */
    protected $guarded = [];
}
