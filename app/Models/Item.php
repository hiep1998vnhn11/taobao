<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes on items tables
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'number'
    ];
}
