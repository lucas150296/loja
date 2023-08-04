<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['valor_pedido'];
    public function cliente(){
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }

    public function loja(){
        return $this->belongsTo('App\loja');
    }
    public function produtos() {
        return $this->belongsToMany('App\produto', 'pedidos_produtos')->withPivot('quantidade', 'id');
    }

}
