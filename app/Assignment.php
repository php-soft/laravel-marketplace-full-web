<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['role_id', 'user_id',];
    
    public function roles()
    {
        return $this->belongsTo('app\Role');
    }

    public function users()
    {
        return $this->belongsTo('app\User');
    }
}
