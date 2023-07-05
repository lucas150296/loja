<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Setor;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::all();
        return view('produto.lista', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setores = Setor::all();
        return view('produto.create', ['setores' => $setores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = $request->all();

        if ($request->hasFile('imagem')) {
            $fileName = $request->file('imagem')->getClientOriginalName();
            $request->imagem->move(public_path('imagens'), $fileName);
            $produto['imagemCapa'] = $fileName;
        }
        Produto::create($produto);

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $setores = Setor::all();
        return view('produto.create', ['produto' => $produto, 'setores' => $setores]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        if ($request->hasFile('imagem')) {
            $fileName = $request->file('imagem')->getClientOriginalName();
            $request->imagem->move(public_path('imagens'), $fileName);
            $produto['imagemCapa'] = $fileName;
        }
        $produto->update($request->all());
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('admin');
    }

}
