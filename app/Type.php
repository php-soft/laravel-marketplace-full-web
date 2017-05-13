<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',

    public function categories()
    {
        return $this->hasMany('App\Category');
    }
    public function shops()
    {
        retrun $this->hasMany('App\Shop')
    }
}
