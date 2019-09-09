<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   	protected $fillable = [
        'name',
    ];

    public function addresses()
    {
        return $this->hasMany('App\OrderInfo');
    }

    public function districts()
    {
        return $this->hasMany('App\District');
    }
}
