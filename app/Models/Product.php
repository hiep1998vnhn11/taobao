<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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
}
