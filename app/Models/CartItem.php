<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';
    protected $fillable = ['customer_id', 'product_id', 'qty', 'price', 'is_order'];

    function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
