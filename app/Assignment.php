<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Assignment extends Model
{
	use ElasticquentTrait;
	
    protected $fillable = ['role_id', 'user_id',];
    
    public function role()
    {
        return $this->belongsTo('app\Role');
    }

    public function user()
    {
        return $this->belongsTo('app\User');
    }
}
