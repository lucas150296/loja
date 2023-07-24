<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Produto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        session_start();


        if (isset($_SESSION['id']) && $_SESSION['id'] != '') {
            $usuario = Cliente::where('id', $_SESSION['id'])->get()->first();
            $produtos = Produto::all();

            return view('index', ['pagina' => 'Home', 'produtos' => $produtos, 'usuario' => $usuario]);
        } else {
            $produtos = Produto::all();

            return view('index', ['pagina' => 'Home', 'produtos' => $produtos]);
        }


    }

    public function admin()
    {
        return view('admin.index');
    }
}
