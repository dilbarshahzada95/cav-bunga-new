<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ShippingtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("Standard shipping -Free");
        foreach ($array as $key => $value) {
            DB::table('shipping_type')->insert([
                'type' => $value,
            ]);
        }
    }
}
