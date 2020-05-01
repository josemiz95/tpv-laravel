<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    function tickets(){
        // Relacion con Ticket tipo N-N
        return $this->belongsToMany('App\Ticket', 'tickets_products', 'ticket_id', 'product_id');
    }
}
