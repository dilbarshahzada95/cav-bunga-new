<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("Pink Layout", "Brown Layout", "Blue Layout");
        foreach ($array as $key => $value) {
            DB::table('layouts')->insert([
                'layout_name' => $value,
            ]);
        }
    }
}
