<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name'=>'Laptop'],['name'=>'PC'],['name'=>'Tablet'],['name'=>'T-Shirt'],['name'=>'Dress']
        ];
        foreach ($categories as $cate) {
            DB::table('categories')->insert($cate);
        }
    }
}
