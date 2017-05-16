<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
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
