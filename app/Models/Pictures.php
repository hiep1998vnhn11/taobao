<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pictures extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'product_id',
        'url'
    ];
    public function findPictureByProductId($id) {
        return DB::table('pictures')->where('product_id', $id)->get();
    }
}
