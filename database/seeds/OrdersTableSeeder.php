<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'user_id' => random_int(1,3),
            'discount' => random_int(7,30),
            'delivery' =>  mt_rand ( floor(30/10), ceil( 60/10)) * 10,
            'sum' => mt_rand ( floor(100/10), ceil( 300/10)) * 10
        ]);
    }
}
