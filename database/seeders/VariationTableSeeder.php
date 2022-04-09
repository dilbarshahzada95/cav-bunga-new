<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VariationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("Yellow", "green", "Black", "White", "Red", "Blue", "Orange", "Pink", "Brown");
        foreach ($array as $key => $value) {
            DB::table('variation')->insert([
                'variation_name' => $value,
            ]);
        }
    }
}
