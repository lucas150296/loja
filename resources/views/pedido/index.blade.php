@extends('admin._compomentes.base')

@section('conteudo')
    <div class="container text-center">

        <form action="{{route('pedido.busca')}}" method="get" style="margin-top: 15px">
            @csrf
            <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="inputGroup-sizing-sm">Cpf</span>
                <input type="text" class="form-control" name="cpf" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-sm">
                <button type="submit">Novo pedido</button>
            </div>
        </form>

    </div>
    <hr>
@endsection
