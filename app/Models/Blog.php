<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'posted_by',
        'en_details',
        'ar_details',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'posted_by');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('status','accepted');
    }

}
