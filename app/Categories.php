<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    function products(){
        return $this->hasMany('App\Products', 'category_id', 'id');
    }
}
