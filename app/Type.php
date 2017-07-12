<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Type extends Model
{
    use ElasticquentTrait;
    
    protected $fillable = [
        'name',
    ];
    
    public function categories($options = [])
    {
        $relation = $this->hasMany('App\Category');

        if (!empty($options['limit'])) {
            $relation = $relation->take($options['limit'])->get();
        }

        return $relation;
    }

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
