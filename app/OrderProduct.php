<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Elasticquent\ElasticquentTrait;

class OrderProduct extends Model
{
    use ElasticquentTrait;

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public static function store($order_id)
    {
        foreach (Cart::content() as $cart) {
            $cart = $cart->toArray() ;
            $cart['order_id'] = $order_id;
            $cart['product_id'] = $cart['id'];
            $cart['quantity'] = $cart['qty'];
            OrderProduct::create($cart);
        }
    }
}
