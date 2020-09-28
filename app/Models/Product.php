<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'code',
        'stock',
        'status',
        'featured',
        'previous_price',
        'price',
        'short_description',
        'long_description',
        'color',
        'size',
        'delivery_options',
        'dealsofday',
        'flashdeals',
        'category_id',
        'user_id',
        'brand_id',

    ];
    protected $casts = [
        'name' => 'string|required',
        'price' => 'double|required',
        'previous_price' => 'double',

        'image' => 'string',
        'slug' => 'string|unique',
        'featured' => 'boolean',
        'status' => 'boolean',
        'dealsofday' => 'boolean',
        'flashdeals' => 'boolean',
        'created_by' => 'string',
        'updated_by' => 'string',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
