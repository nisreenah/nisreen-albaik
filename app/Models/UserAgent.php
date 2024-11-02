<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAgent extends Model
{
    protected $fillable = [
        'languages',
        'device',
        'platform',
        'platform_version',
        'browser',
        'browser_version',
        'is_robot',
        'robot',
        'ip_address'
    ];
}
