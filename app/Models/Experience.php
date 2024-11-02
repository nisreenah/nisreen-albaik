<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'en_position',
        'ar_position',
        'en_company',
        'ar_company',
        'en_details',
        'ar_details',
        'start_date',
        'end_date'
    ];
}
