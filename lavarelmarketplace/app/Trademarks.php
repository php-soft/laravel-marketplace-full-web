<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trademarks extends Model
{
     public function industry(){
    	return $this->belongsTo('App\Industrys');
    }
}
