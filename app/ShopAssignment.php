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

    public function shops()
    {
        return $this->belongsTo('App\Shop');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
}
