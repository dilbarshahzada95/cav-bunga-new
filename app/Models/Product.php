<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = ['product_name', 'product_category_id', 'slogan', 'sku', 'tags', 'volume', 'wieght', 'layout_id', 'product_description', 'price', 'product_gallery', 'variation_id', 'collection_id'];

    function category()
    {
        return $this->belongsTo('App\Models\Category',  'product_category_id', 'id');
    }
    function stock()
    {
        return $this->hasOne('App\Models\Stock', 'product_id', 'id');
    }
}
