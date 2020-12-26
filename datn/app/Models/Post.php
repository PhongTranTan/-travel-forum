<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'view',
        'title',
        'name',
        'address',
        'website',
        'phone',
        'lat',
        'lng',
        'image',
        'description',
        'time_start',
        'time_end',
        'active',
        'iframe',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSortPost($query)
    {
        return $query->orderBy('id', 'DESC');
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}