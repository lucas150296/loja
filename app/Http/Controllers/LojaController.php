<?php

namespace App\Http\Controllers;

use App\estoque;
use App\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = Loja::all();
        return view('loja.index' , ['lojas' => $lojas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loja.create_edite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loja  = Loja::create($request->all());

        $estoque = new estoque();

        $estoque->loja_id = $loja->id;
        $estoque->save();

        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function edit(Loja $loja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loja $loja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loja $loja)
    {
        //
    }
}
