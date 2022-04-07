<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $array = array("Order Received","Order in Production","Ready for Shipping","Order Sent","Delivery Today","Order Delivered");
        foreach ($array as $key => $value) {
            DB::table('order_status')->insert([
                'name' => $value,
            ]);
        }
    }
}
