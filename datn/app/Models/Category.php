<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
       'name',
       'image',
       'icon',
       'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}