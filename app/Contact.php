<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Contact extends Model
{
    use ElasticquentTrait;

    protected $fillable = [
        'content',
        'email'
    ];
}
