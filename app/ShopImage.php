<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopImage extends Model
{
     protected $fillable = [
        'shop_id',
        'image'
    ];

    public function shops()
    {
        return $this->belongsTo('App\Shop');
    }
}
