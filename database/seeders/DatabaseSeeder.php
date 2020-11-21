<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        $this->call(CategorySeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        //$this->call(OrderSeeder::class);
        //$this->call(ItemSeeder::class);
        Model::reguard();
    }
}
