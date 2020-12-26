<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'post_id',
        'customer_id',
        'rating',
        'title',
        'content',
    ];

    public function scopeSortReview($query)
    {
        return $query->orderBy('id', 'DESC');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}