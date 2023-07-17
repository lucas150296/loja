<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table ='estoques';
    protected $fillable = ['loja_id'];

    public function loja() {
        return $this->belongsTo('App\Loja', 'loja_id' , 'id');
    }

    public function produtos(){
        return $this->belongsToMany('App\Produto', 'estoques_produtos' )->withPivot('id', 'quantidade');
    }
}
