<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'type_id'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function products($options = [])
    {
        $relation = $this->hasMany('App\Product');

        if (!empty($options['limit'])) {
            $relation = $relation->orderBy('id', 'desc')->take($options['limit'])->get();
        }

        return $relation;
    }
}
