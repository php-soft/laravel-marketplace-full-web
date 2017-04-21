<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    public function industry(){
    	return $this->belongsTo('App\Industrys');
    }
}
