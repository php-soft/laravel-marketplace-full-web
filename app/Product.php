<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'quantity', 'image', 'category_id', 'shop_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
    
    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function productImages()
    {
        return $this->hasMany('App\ProductImage');
    }
}
