<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillaable = ['product_name', 'product_category_id', 'slogan', 'sku', 'tags','volume','wieght','layout_id','product_description','featured_title','product_gallery'];

}
