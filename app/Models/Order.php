<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillaable = ['customer_id', 'billing_first_name', 'billing_last_name', 'billing_phone', 'billing_mob', 'billing_street_aadress', 'billing_city', 'billing_postcode', 'billing_state', 'billing_country', 'order_date', 'order_status_id', 'order_price', 'coupon_code', 'transaction_id', 'payment_type'];

    function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'transaction_id');
    }
    function orderHistory()
    {
        return $this->hasMany(OrderHistory::class, 'order_id', 'transaction_id');
    }
    function CustomerDetails()
    {
        return $this->hasOne(CustomerDetails::class, 'customer_id', 'customer_id');
    }
}
