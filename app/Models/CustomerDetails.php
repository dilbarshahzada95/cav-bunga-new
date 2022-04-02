<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    use HasFactory;
    protected $table = 'customer_details';
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'phone',
        'street',
        'mob',
        'city',
        'pincode',
        'country',
    ];
}
