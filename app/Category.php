<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   // protected $table = 'categories';
    public function places()
    {
        return $this->belongsToMany('App\Place','category_place','cat_id','place_id');
    }
}
