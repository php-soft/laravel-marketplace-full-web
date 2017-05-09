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

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
