<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    use HasFactory;
    protected $table = 'order_history';
    protected $fillable = ['customer_id', 'billing_first_name', 'billing_last_name', 'billing_phone', 'billing_mob', 'billing_street_aadress', 'billing_city', 'billing_postcode', 'billing_state', 'billing_country', 'order_date', 'order_status_id', 'order_price', 'coupon_code', 'transaction_id', 'payment_type'];
    function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'transaction_id');
    }
}
