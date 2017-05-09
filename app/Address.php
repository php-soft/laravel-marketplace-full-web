<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
    'user_id',
    'address', 
    'street',
    'district_id',
    'city_id',
    'country_id',
    'phone_number',
    'zip_code'
    ]; 
    public function district(){ 
      return $this->belongsTo('app\District'); 
    } 
}
