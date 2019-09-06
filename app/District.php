<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
   	protected $fillable = [
        'name', 'city_id',
    ];

    public function addresses()
    {
        return $this->hasMany('App\OrderInfo');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
