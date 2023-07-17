<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'tipo_documento', 'documento', 'nome', 'razao_social', 'celular', 'data_nascimento', 'sexo', 'categoria', 'cep', 'cidade', 'estado', 'endereco', 'numero',
        'bairro', 'limite_credito', 'dia_vencimento', 'cliente_inativo', 'venda_bloqueada', 'outro'
    ];

    public function pedidos(){
        return $this->hasMany('App\Pedido', 'cliente->id' , 'id');
    }
}
