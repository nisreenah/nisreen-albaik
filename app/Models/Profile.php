<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
        'en_major',
        'ar_major',
        'en_country',
        'ar_country',
        'en_address',
        'ar_address',
        'email',
        'date_of_birth',
        'phone',
        'skype',
        'facebook',
        'twitter',
        'linkedIn',
        'telegram',
        'en_interest',
        'ar_interest',
        'en_bio',
        'ar_bio',
        'en_summary',
        'ar_summary',
        'en_title',
        'ar_title',
        'long',
        'lat',
        'status',
        'CV'
    ];

}
