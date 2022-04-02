<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'address' => '123 Main St',
            'phone' => '123-456-7890',
            'mobile' => '123-456-7890',
            'city' => 'New York',
            'country' => 'USA',
            'state' => 'NY',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
