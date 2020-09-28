<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'post',
        'image',
        'status',
        'address',
        'gender',
        'phone',
        'social_links',

    ];

    protected $casts = [
        'name' => 'string|required',
        'post' => 'string|required',
    ];
}
