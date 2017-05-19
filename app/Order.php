<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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
    const STATUS_NEW = 0;
    const STATUS_CONFIRM = 1;
    const STATUS_PAYMENT = 2;
    const STATUS_SHIPPING = 3;
    const STATUS_RETURN = 4;
    const STATUS_DONE = 5;

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
}
