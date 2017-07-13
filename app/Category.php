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

        if (!empty($options['newest'])) {
            $relation = $relation->orderBy('id', 'desc');
        }
        if (!empty($options['limit'])) {
            $relation = $relation->take($options['limit']);
        }

        if (!empty($options['similar'])) {
            $relation = $relation->where('id', '<>', $options['similar']);
        }

        return $relation->get();
    }
}
