<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'is_seen'
    ];

    public function scopeIsNotSeen($query)
    {
        return $query->where('is_seen', '0');
    }

    public function scopeIsSeen($query)
    {
        return $query->where('is_seen', '1');
    }
}
