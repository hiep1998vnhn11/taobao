<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $appends = [
        'total',
    ];

    protected $fillable = ['status'];

    public function hasProduct()
    {
        return $this->hasMany('App\Models\HasProduct', 'detail_id')
            ->select(['id', 'product_id', 'detail_id', 'amount'])
            ->with('product');
    }

    public function getTotalAttribute()
    {
        $total = 0;
        foreach ($this->hasProduct()->cursor() as $item) {
            $total += $item->amount * $item->product->price;
        }
        return $total;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
