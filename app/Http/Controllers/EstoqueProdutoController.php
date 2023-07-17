<?php

namespace App\Http\Controllers;

use App\Estoque;
use App\EstoqueProduto;
use App\Produto;

use Illuminate\Http\Request;

class EstoqueProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Estoque $estoque)
    {
        return view('estoque.create' , ['estoque' => $estoque]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Estoque $estoque)
    {
        $regras = [
            'cod' => 'exists:produtos,codigo',
            'quantidade' => 'required'
        ];

        $feedback = [
            'cod.exists' => 'O produto informado não existe',
            'required' => 'O campo :attribute deve possuir um valor válido'
        ];

        $request->validate($regras, $feedback);

        $estoqueProduto = new EstoqueProduto();
        $estoqueProduto->estoque_id = $estoque->id;
        $estoqueProduto->quantidade = $request->get('quantidade');

        $produto = Produto::where('codigo','like', '%' .$request->input('cod'))->get()->first();
        $estoqueProduto->produto_id = $produto->id;
        $estoqueProduto->save();



        return redirect()->route('estoqueProduto.create', ['estoque' => $estoque->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstoqueProduto  $estoqueProduto
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstoqueProduto  $estoqueProduto
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstoqueProduto  $estoqueProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstoqueProduto  $estoqueProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstoqueProduto $estoqueProduto, Estoque $estoque)
    {
        $estoqueProduto->delete();
        return redirect()->route('estoqueProduto.create', ['estoque' => $estoque->id]);

    }
}
