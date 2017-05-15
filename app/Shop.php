<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'type_id',
        'city_id',
        'district_id',
        'country_id',
        'description',
        'image',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function district()
    {
        return $this->belongsTo('App\District');
    }
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function shopImage()
    {
        return $this->belongsTo('App\shopImage');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function shopAssignments()
    {
        return $this->hasMany('App\ShopAssignment');
    }
}
