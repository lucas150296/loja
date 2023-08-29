<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class PreVendaController extends Controller
{
    public function busca($cpf)
    {
        $cliente = Cliente::where('documento', 'like', '%' . $cpf)->get()->first();

        if (isset($cliente->documento) && $cliente->documento != "") {
            return view('pre_venda.lista_pre_venda', ['cliente' => $cliente]);
        } else {

            echo "<h1>Usuário não localizado</h1>";
        }
    }
}
