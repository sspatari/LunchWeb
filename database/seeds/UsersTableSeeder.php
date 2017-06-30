<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersArray = ['Stas', 'Ion', 'Victor'];
        foreach ($usersArray as $userName) {
            DB::table('users')->insert([
                'name' => $userName,
                'email' => $userName.'@gmail.com',
                'password' => bcrypt('secret'),
                'skype' => $userName,
                'phone' => random_int(100000000, 999999999),
                'office' => random_int(1,60),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
