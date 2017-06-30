<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberTestItems = 4;

        for($i = 0; $i < $numberTestItems; ++$i) {
            $first_rand = mt_rand( floor(20/10), ceil( 200/10)) * 10;
            $second_rand = mt_rand( floor(30/10), ceil( 60/10)) * 10;
            DB::table('items')->insert([
                'name' => str_random(10),
                'price' => mt_rand( floor(30/10), ceil( 60/10)) * 10,
                'restaurant_id' => random_int(1,9),
                'discountable' => random_int(0,1)
            ]);
        }
    }
}
