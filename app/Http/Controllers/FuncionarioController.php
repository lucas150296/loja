<?php

namespace App\Http\Controllers;


use App\Funcionario;
use App\Loja;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.index', ['funcionarios' => $funcionarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lojas = Loja::all();
        return view('funcionario.create_edite', ['lojas' => $lojas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Funcionario::create($request->all());

        return redirect()->route('admin');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionario $funcionario)
    {
        //
    }
}
