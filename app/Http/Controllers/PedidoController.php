<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Funcionario;
use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pedido.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Pedido $pedido)
    {
        var_dump($pedido);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }

    public function buscaCliente(Request $request)
    {

        $cliente = Cliente::where('documento', 'like', '%' . $request->get('cpf'))->get()->first();

        if (isset($cliente->id) && $cliente->id != '') {
            if ($cliente->cliente_inativo == 1) {
                echo "<script>alert('Usuário inativo');</script>";
                return view('pedido.index');
            } else if ($cliente->venda_bloqueada == 1) {
                echo "<script>alert('Usuário bloqueado');</script>";
                return view('pedido.index');
            } else {

                $funciomario = Funcionario::where('id', 'like', '%' . $_SESSION['id'])->get()->first();
                $pedido = new Pedido;
                $pedido->cliente_id = $cliente->id;
                $pedido->loja_id = $funciomario->loja_id;

                $tamanhoSenha = 10;

                $caracteresPermitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#';

                $senha = '';
                for ($i = 0; $i < $tamanhoSenha; $i++) {
                    $senha .= $caracteresPermitidos[rand(0, strlen($caracteresPermitidos) - 1)];
                }

                $pedido->senha_de_autorizacao = $senha;

                $pedido->save();

                return redirect()->route('pedidoProduto.create' , ['pedido' => $pedido->id]);
            }
        } else {
            echo "<script>alert('Usuário não localizado');</script>";
            return view('pedido.index');
        }
    }
}
