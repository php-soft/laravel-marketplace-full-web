<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
    'name',
    'type_id'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
