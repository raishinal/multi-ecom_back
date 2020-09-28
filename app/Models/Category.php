<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'parent_id',
        'child_id',
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
