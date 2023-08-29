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

    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Cliente</th>
              <th scope="col">Status</th>
              <th scope="col">Abri</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pedidos as $key => $pedido)
            <tr>
                <th scope="row">{{$key + 1 }}</th>
                <td>{{$pedido->cliente->nome}}</td>
                <td>{{$pedido->status}}</td>
                <td><a href="{{route('pedidoProduto.create' , ['pedido' => $pedido->id])}}">pedido</a></td>
              </tr>
            @endforeach
          </tbody>
    </table>
@endsection
