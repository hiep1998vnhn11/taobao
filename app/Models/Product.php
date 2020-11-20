<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'brand',
        'link',
        'star',
        'description',
        'price',
        'image',
        'category_id',
        'number_in_shop'
    ];

    public function findProductById($id) {
        return DB::table('products')->where('id', $id)->get();
    }
}
