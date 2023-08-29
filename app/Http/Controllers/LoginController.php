<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Funcionario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
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
                    return view('login.loginIndex');
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
                    return view('login.loginIndex');
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
