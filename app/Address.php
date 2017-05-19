<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'city_id',
        'country_id',
        'district_id',
        'street',
        'zip_code',
        'phone_number'
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
}
