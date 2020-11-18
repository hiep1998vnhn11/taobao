<?php


namespace Database\Seeders;


use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $limit = 10;
        $categories = Category::all()->pluck('id')->toArray();
        for ($i = 0; $i <= $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'link' => $faker->url,
                'star' => $faker->randomFloat(null, 0, 5),
                'description' => $faker->text(100),
                'price' => $faker->numberBetween(1,100),
                'image' => $faker->imageUrl(640, 480, 'clothes'),
                'category_id' => $faker->randomElement($categories),
                'number_in_shop' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
