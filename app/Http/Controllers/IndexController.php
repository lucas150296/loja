<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('index', ['pagina' => 'Home','produtos' => $produtos]);
    }

    public function admin(){

        return view('admin.index');
    }
}
