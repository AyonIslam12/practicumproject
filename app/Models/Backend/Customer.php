<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'email' ,
        'photo' ,
        'password',
        'age' ,
        'nid_num',
        'gender' ,
        'contact' ,
        'address' ,
        'status'
    ];
}
