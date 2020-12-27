<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function scopeByKeyWord($query, $byKeyWord)
    {
        return $query->where( function ($sq) use ($byKeyWord) {
            $sq->where('name', 'LIKE', "%$byKeyWord%")
                ->orWhere('title', 'LIKE', "%$byKeyWord%");
        });
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'post_id');
    }

    public function images()
    {
        return $this->hasMany(PostImage::class, 'post_id');
    }

    public function getCountReviewsAttribute()
    {
        return $this->reviews->count();
    }

    public function getCountRatingsAttribute()
    {
        $count = $this->count_reviews ? ($this->reviews->sum('rating') / $this->count_reviews) : 0;
        return (double) round($count, 1);
    }

    public function getBannersAttribute()
    {
        $banners = [];
        if ($this->images->count() > 0) {
            foreach ($this->images as $key => $item) {
                array_push($banners, Storage::url($item->path));
            }
        } else {
            $banners = getGallery();
        }
        return $banners;
    }

    public function getBannersAdminAttribute()
    {
        $banners = [];
        if ($this->images->count() > 0) {
            foreach ($this->images as $key => $item) {
                array_push($banners, Storage::url($item->path));
            }
        }
        return $banners;
    }
}