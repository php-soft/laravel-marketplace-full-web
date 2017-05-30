<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const STATUS_NEW = 0;
    const STATUS_CONFIRM = 1;
    const STATUS_PAYMENT = 2;
    const STATUS_SHIPPING = 3;
    const STATUS_RETURN = 4;
    const STATUS_DONE = 5;

    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'shipping_name',
        'shipping_address',
        'shipping_phone',
        'shipping_email',
        'country_id',
        'city_id',
        'district_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }

    public function statusText()
    {
        if ($this->status == self::STATUS_NEW) {
            return 'New';
        } elseif ($this->status == self::STATUS_CONFIRM) {
            return "Confirm";
        } elseif ($this->status == self::STATUS_PAYMENT) {
            return "Payment";
        } elseif ($this->status == self::STATUS_SHIPPING) {
            return "Shipping";
        } elseif ($this->status == self::STATUS_RETURN) {
            return "Return";
        } elseif ($this->status == self::STATUS_DONE) {
            return "Done";
        } else {
            return 'New';
        }
    }

    public function subtotal()
    {
        $subtotal = 0;
        foreach ($this->orderProducts as $orderProduct) {
            $subtotal = $subtotal + $orderProduct->quantity * $orderProduct->price;
        }
        return number_format($subtotal);
    }

    public function items()
    {
        $items = 0;
        foreach ($this->orderProducts as $orderProduct) {
            $items = $items + $orderProduct->quantity;
        }
        return number_format($items);
    }
}
