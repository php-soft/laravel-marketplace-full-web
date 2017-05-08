<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'ship_address',
        'phone_number',
        'email',
        'couuntry_id',
        'city_id'
    ];

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
