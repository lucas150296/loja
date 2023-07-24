<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Funcionario;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create_edite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cliente::Create($request->all());
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.create_edite', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {

        $dados = $request->all();
        if (isset($dados['cliente_inativo'])) {
            # code...
        } else {
            $dados['cliente_inativo'] = '0';
        };
        if (isset($dados['venda_bloqueada'])) {
            # code...
        } else {
            $dados['venda_bloqueada'] = '0';
        };


        $cliente->update($dados);
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {

        $cliente->delete();
        return redirect()->route('admin');
    }
    public function loginIndex(Request $request)
    {
        $error = "";
        $error =  $request->get('error');

        if ($error == 1 ) {
            echo"<script>confirm('reque autorização para acesas esta rota');</script>";
        }
        return view('cliente.loginIndex');
    }
    public function login(Request $request)
    {

        session_start();

        if (isset($_SERVER['id']) && $_SESSION['id'] != '') {

            return redirect()->route('home');

        } else {
            if ($request->get('funcionario') == 1) {
                $fucionario = new Funcionario();

                $email = $request->get('email');
                $senha = $request->get('senha');

                $usuario = $fucionario->where('email', $email)
                    ->where('senha', $senha)
                    ->get()
                    ->first();

                if (isset($usuario->email) && $usuario->email != '') {

                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['funcionario'] = 1;

                    return redirect()->route('admin');
                } else {
                    echo "<script>alert('Usuário ou senha Invalido');</script>";
                    return view('cliente.loginIndex');
                }
            } else {
                $cliente = new Cliente();

                $email = $request->get('email');
                $senha = $request->get('senha');

                $usuario = $cliente->where('email', $email)
                    ->where('senha', $senha)
                    ->get()
                    ->first();

                if (isset($usuario->email) && $usuario->email != '') {

                    $_SESSION['funcionario'] = 0;

                    $_SESSION['id'] = $usuario->id;

                    return redirect()->route('home', ['ususario' => $usuario]);
                } else {

                    echo "<script>alert('Usuário ou senha Invalido');</script>";
                    return view('cliente.loginIndex');
                }
            }
        }



    }

    public function sair()
    {
        session_start();

        session_destroy();

        return redirect()->route('home');
    }
}
