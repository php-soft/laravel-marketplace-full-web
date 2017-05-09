<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
