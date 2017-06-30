<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantsArray = ["Andy's", "La placinte", "Blin Off", "Foisor", "Star Kebab", "Mico", "Oliva", "The box", "Corso"];
        foreach ($restaurantsArray as $restaurantName) {
            DB::table('restaurants')->insert([
                'name' => $restaurantName,
                'discount' => random_int(7,30),
                'delivery' => mt_rand( floor(30/10), ceil( 60/10)) * 10,
                'terms' => str_random(10),
                'phone_number' => random_int(100000000, 999999999),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
