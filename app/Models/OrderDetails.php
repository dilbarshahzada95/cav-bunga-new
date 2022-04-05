<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillaable = ['order_id', 'product_id', 'product_price', 'qty', 'total'];

    function productlist()
    {
        return $this->hasManyThrough(Product::class,  'product_id');
    }
}
