<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashbox extends Model
{
    //
    protected $table = 'cashboxes';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tickets(){
        return $this->hasMany('App\Titcket', 'id', 'cashbox_id');
    }
}
