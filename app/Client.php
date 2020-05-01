<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'clients';

    public function tickets(){
        return $this->hasMany('App\Ticket', 'id', 'client_id');
    }
}
