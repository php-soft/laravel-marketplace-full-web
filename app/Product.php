<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable=['name','description','price','_token','sale','category_id','trademark_id'];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function shop(){
    	return $this->belongsTo('App\Shop');
    }
}
