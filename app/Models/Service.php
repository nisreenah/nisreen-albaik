<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_details',
        'ar_details',
        'icon'
    ];
}
