<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product');
    }
    public function cities()
    {
        return $this->hasMany('App\City');
    }
    public function districts()
    {
        return $this->hasMany('App\District');
    }
    public function countries()
    {
        return $this->hasMany('App\Country');
    }
    public function types()
    {
        return $this->hasMany('App\Type');
    }
    public function shopimages()
    {
        return $this->hasMany('App\ShopImgae');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function shopassignment()
    {
        return $this->belongsTo('App\ShopAssignment');
    }
}
