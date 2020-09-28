<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',

    ];

    protected $casts = [
        'title' => 'string|required',
        'description' => 'string|required',
        'image' => 'string',
        'status' => 'boolean',
        'created_by' => 'string',
        'updated_by' => 'string',
    ];

}
