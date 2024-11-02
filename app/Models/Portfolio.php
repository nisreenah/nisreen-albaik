<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
        'image',
        'en_client',
        'ar_client',
        'completion',
        'en_role',
        'ar_role',
        'category_id',
        'en_details',
        'ar_details'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function galleries()
    {
        return $this->morphMany(Gallery::class, 'imageable');
    }

    public function delete()
    {
        if(file_exists('file_path')){
            @unlink('file_path');
        }
        parent::delete();
    }
}
