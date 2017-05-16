<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function districts()
    {
        return $this->hasMany('App\District');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
