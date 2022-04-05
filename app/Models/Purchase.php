<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase';
    protected $fillaable = ['product_id', 'supplier_id', 'transaction_date', 'qty', 'purchase_price '];
}
