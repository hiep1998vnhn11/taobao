<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasProduct extends Model
{
    use HasFactory;
    protected $fillable = ['detail_id', 'product_id', 'amount'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product')->select(['id', 'name', 'brand', 'link', 'price', 'image']);
    }
}
