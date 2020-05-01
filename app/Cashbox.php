<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashbox extends Model
{
    // Modelo de Cashbox en TPV
    protected $table = 'cashboxes';

    public function user(){
        // Relacion con Usuarios (N-1)
        return $this->belongsTo('App\User');
    }

    public function tickets(){
        // Relacion con tickets (1-N)
        return $this->hasMany('App\Titcket', 'id', 'cashbox_id');
    }
}
