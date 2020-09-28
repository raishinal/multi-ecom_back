<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'review',
        'rating',
        'status',
        'user_id',
        'product_id',

    ];

    protected $casts = [
        'review' => 'string|required',
    ];
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

}
