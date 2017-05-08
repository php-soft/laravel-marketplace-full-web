<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image'
    ];

    public function order()
    {
        return $this->belongsTo('App\Product');
    }
}
