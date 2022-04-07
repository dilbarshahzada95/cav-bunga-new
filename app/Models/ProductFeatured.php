<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeatured extends Model
{
    use HasFactory;
    protected $table = 'product_featured';
    protected $fillable = ['product_id', 'tile', 'description', 'image'];
}
