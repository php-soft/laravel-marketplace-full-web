<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function industry(){
    	return $this->belongsTo('App\Industrys');
    }
}
