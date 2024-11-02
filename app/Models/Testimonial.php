<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'image',
        'en_comment',
        'ar_comment',
        'en_name',
        'ar_name',
        'en_position',
        'ar_position'
    ];
}
