<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function clientes(){
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }

}
