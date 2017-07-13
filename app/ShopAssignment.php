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

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
