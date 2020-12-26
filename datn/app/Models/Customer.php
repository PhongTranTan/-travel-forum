<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
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

    protected $hidden = [
        'password'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}