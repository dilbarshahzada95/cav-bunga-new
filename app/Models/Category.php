<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'sub_category';
    protected $fillable = ['parent_category_id', 'sub_category_name', 'layout_id', 'sub_category_title', 'sub_category_description', 'sub_category_image'];
}
