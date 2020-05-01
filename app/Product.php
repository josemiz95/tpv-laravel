<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    function tickets(){
        // Relacion con Ticket tipo N-N
        return $this->belongsToMany('App\Ticket', 'tickets_products', 'product_id', 'ticket_id')
                    ->withPivot('name','quantity','price','tax');
    }
}
