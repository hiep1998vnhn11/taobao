<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name'=>'Đồ Nữ'],['name'=>'Đồ Nam'],['name'=>'Đồ Thể Thao'],['name'=>'Túi xách'],['name'=>'Giày']
        ];
        foreach ($categories as $cate) {
            DB::table('categories')->insert($cate);
        }
    }
}
