<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("Men", "Woman");
        foreach ($array as $key => $value) {
            DB::table('main_category')->insert([
                'category_name' => $value,
            ]);
        }
    }
}
