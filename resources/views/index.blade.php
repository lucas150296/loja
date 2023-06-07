@extends('_compomentes.pagina_basica', ['pagina' => $pagina])
@section('conteudo')
    <div class="container">

        <div class="row">
            @foreach ($produtos as $key => $produto)
                @if ($produto->disponivel_venda == 1)
                    @if ($produto->destaque == 1)
                    <div class="col-sm-3 p-4">
                        <img src="imagens/{{ $produto->imagemCapa }}" class="img-fluid" alt="">
                        <a href="">{{ $produto->nome }}</a>
                    </div>
                    @endif
                @endif
            @endforeach
        </div>
    @endsection
