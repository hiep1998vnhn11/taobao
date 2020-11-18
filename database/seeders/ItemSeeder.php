<?php


namespace Database\Seeders;


use App\Models\Order;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $orders = Order::all()->pluck('id')->toArray();
        $products = Product::all()->pluck('id')->toArray();
        $limit = 10;
        for ($i = 0; $i <= $limit; $i++) {
            DB::table('items')->insert([
                'order_id' => $faker->randomElement($orders),
                'product_id' => $faker->randomElement($products),
                'number' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
