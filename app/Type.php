<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
