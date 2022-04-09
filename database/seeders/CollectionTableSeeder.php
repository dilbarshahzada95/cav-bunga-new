<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array("New Collection", "Leather Type");
        foreach ($array as $key => $value) {
            DB::table('collection')->insert([
                'collection_name' => $value,
            ]);
        }
    }
}
