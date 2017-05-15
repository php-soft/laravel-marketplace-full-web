<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopAssignment extends Model
{
    protected $fillable = [
        'shop_id',
        'user_id',
        'role_id'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function roles()
    {
        return $this->hasMany('App\Role');
    }
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}
