<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name']; 
    public function addresses(){ 
      return $this->hasMany('app\Address'); 
    }

}
