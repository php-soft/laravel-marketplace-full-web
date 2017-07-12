<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Role extends Model
{
	use ElasticquentTrait;
	
    protected $fillable = ['name', 'description'];

    public function assignments()
    {
        return $this->hasMany('app\Assignment');
    }

    public function shopAssignments()
    {
        return $this->hasMany('App\ShopAssignment');
    }
}
