<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'postdate',
    ];

    public function userTestimonials(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
