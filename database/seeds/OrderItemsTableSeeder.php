<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberTestOrderItems = 10;

        for($i = 0; $i < $numberTestOrderItems; ++$i) {
            $first_rand = mt_rand( floor(20/10), ceil( 200/10)) * 10;
            $second_rand = mt_rand( floor(30/10), ceil( 60/10)) * 10;
            DB::table('order_items')->insert([
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'user_id' => random_int(1,3),
                'item_id' => random_int(1,4),
                'price' => $first_rand,
                'delivery_price' => $second_rand,
                'final_price' => $first_rand + $second_rand,
                'order_id' => 1
            ]);
        }
    }
}
