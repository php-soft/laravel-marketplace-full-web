<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class City extends Model
{
    use ElasticquentTrait;
    
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
