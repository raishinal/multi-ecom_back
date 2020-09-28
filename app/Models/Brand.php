<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'status',
        'featured',

    ];

    protected $casts = [
        'title' => 'string|required',
        'slug' => 'string|required',
        'image' => 'string',
        'featured' => 'boolean',
        'status' => 'boolean',
        'created_by' => 'string',
        'updated_by' => 'string',
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

}
