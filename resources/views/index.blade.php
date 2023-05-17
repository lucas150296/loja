@extends('_compomentes.pagina_basica', ['pagina' => $pagina])
@section('conteudo')

<div class="container">
    @foreach ($produtos as $key => $produto )
    <div class="row" >
        <div class="col-sm-3 p-4">
          <img src="imagens/952596.gif" class="img-fluid" alt="">
          <a href="">{{$produto->nome}}</a>
        </div>

    @endforeach

@endsection
