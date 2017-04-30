<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function places()
    {
        return $this->belongsToMany('App\Place','category_place');
    }
}
