<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category','category_place');
    }
    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
    public function reviews()
    {
        return $this->hasMany('App\Reviews');
    }
}
