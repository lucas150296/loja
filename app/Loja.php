<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = ['Endereco_Numero','Bairro','Telefone','CNPJ','Cidade','Estados','Nome_Fantasia','Endereco' ];

}
