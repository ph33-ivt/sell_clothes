<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'date','user_id', 'address_id',
    ];

    public function getTotalAttribute()
    {
        return $this->orderDetails->sum('total');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->belongsTo('App\OrderInfo');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function orderInfo()
    {
        return $this->belongsTo('App\OrderInfo');
    }
}
