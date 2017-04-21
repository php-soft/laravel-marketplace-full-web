<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable=['name','description','price','_token','sale','category_id','trademark_id'];
    public function category(){
    	return $this->belongsTo('App\Categorys');
    }
    public function trademark(){
    	return $this->belongsTo('App\Trademarks');
    }
     public function shop(){
    	return $this->belongsTo('App\Shop');
    }
}
