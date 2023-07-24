<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'email', 'senha', 'loja_id'];

    public function loja() {
        return $this->belongsTo('App\Loja');
    }

}
