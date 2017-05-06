<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	protected $table = 'categories';
	public $timestamps = true;
	protected $fillable = ['name', 'type_id'];
	public function type() {
		return $this->belongsTo('App\Type');
	}
}
