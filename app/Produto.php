<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['codigo','cod_barras','setor_id', 'status', 'nome', 'valor', 'custo' , 'tipo_Cadastro' ,'disponivel_venda',
    'destaque', 'oferta', 'valor_desconto','data_f_oferta', 'imagemCapa','descricao'];


}
