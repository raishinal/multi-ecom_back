<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'vendor_id',
        'quantity',
        'total_price',
        'payment_method',
        'tax',
        'delivery_fee',
        'delivery_status',

    ];
}
