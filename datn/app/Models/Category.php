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

    public function getIconElementAttribute()
    {
        return [
            1 => '<i class="icon ic-automotive"></i>',
            2 => '<i class="icon ic-beauty"></i>',
            3 => '<i class="icon ic-hotel"></i>',
            4 => '<i class="icon ic-restaurant"></i>',
            5 => '<i class="icon ic-shopping"></i>',
            6 => '<i class="icon ic-cup"></i>',
            7 => '<i class="icon ic-beer"></i>',
            8 => '<i class="icon ic-destination"></i>',
        ];
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function getCountPostAttribute()
    {
        return $this->posts->count();
    }
}