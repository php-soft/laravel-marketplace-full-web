<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;
    const STATUS_BANNED = 2;
    protected $fillable = [
        'name',
        'user_id',
        'type_id',
        'city_id',
        'district_id',
        'country_id',
        'description',
        'image',
        'status'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function shopImages()
    {
        return $this->hasMany('App\ShopImgae');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function shopAssignment()
    {
        return $this->belongsTo('App\ShopAssignment');
    }

    public static function getStatuses()
    {
        return [
            self::STATUS_PENDING => 'PENDING',
            self::STATUS_APPROVED =>'APPROVED',
            self::STATUS_BANNED => 'BANNED'
        ];
    }
}
