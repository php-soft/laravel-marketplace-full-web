<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Country extends Model
{
    use Searchable;
    
    protected $fillable = ['name'];

    public function searchableAs()
    {
        return 'countries_index';
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function cities()
    {
        return $this->hasMany('App\City');
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
