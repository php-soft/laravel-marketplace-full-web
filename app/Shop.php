<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    
     public function type(){
    	return $this->belongsTo('App\Type');
    }
}
