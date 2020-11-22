<?php


namespace Database\Seeders;


use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $fake = Factory::create();
        $users_count = 25;
        for ($i = 0; $i < $users_count; $i++) {
            DB::table('users')->insert([
                'password' => $fake->password(6, 20),
                'username' => $fake->firstName()
            ]);
        }
    }
}
