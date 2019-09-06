<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'brand', 'description', 'price', 'category_id',
    ];

    public function productSize()
    {
        return $this->hasOne('App\productSize');
    }
    
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    

    
}
