<?php


namespace Database\Seeders;


use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $users = User::all()->pluck('id')->toArray();
        $limit = 10;
        for ($i = 0; $i <= $limit; $i++) {
            DB::table('orders')->insert([
                'cost' => $faker->numberBetween(1, 1000),
                'user_id' => $faker->randomElement($users),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }
    }
}
