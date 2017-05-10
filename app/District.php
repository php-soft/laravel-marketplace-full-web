<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
