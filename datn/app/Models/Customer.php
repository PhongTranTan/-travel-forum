<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'full_name',
        'avatar',
        'address',
        'job',
        'job_address',
        'birthday',
        'email',
        'phone',
        'password',
        'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}