<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //Modelo de Ticket en TPV
    protected $table = 'tickets';

    public function user(){
        // Relacion con Usuarios (N-1)
        return $this->belongsTo('App\User');
    }

    public function cashbox(){
        // Relacion con Usuarios (N-1)
        return $this->belongsTo('App\Cashbox');
    }

    public function client(){
        // Relacion con Usuarios (N-1)
        return $this->belongsTo('App\Client');
    }

    function products(){
        // Relacion con Ticket tipo N-N
        return $this->belongsToMany('App\Product', 'tickets_products', 'ticket_id', 'product_id')
                    ->withPivot('name','quantity','price','tax');
    }
    
}
