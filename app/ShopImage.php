<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class ShopImage extends Model
{
    use ElasticquentTrait;

    protected $fillable = [
        'shop_id',
        'image'
    ];
    
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
