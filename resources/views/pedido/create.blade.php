@extends('admin._compomentes.base')

@section('conteudo')
    <label for="" style="margin: 5px">ADD Produto no pedido </label>
    <div class="conteudo">
        <form action="{{ route('pedidoProduto.store', ['pedido' => $pedido->id]) }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Cod.produto</label>
                <div class="col-sm-10">
                    <input name="cod-produto" type="text" class="form-control" placeholder="código do produto"
                        value="{{ old('cod-produto') }}">
                </div>
                <label for="">quantidade</label>
                <div class="col-sm-1">

                    <input name="quantidade" type="text" class="form-control" placeholder="quantidade"
                        value="{{ old('quantidade') }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">ADD Produto</button>
                </div>
            </div>
        </form>
    </div>

    <label for="" style="margin: 5px">Dados do cliente pedido </label>
    <div class="conteudo">
        <div class="form-row">
            <div class="form-group col-md-3">
                <div class="form-inline">
                    <label>Documento :</label>
                    <input type="text" class="form-control" readonly value="{{ $pedido->cliente->documento }}">
                </div>

            </div>

            <div class="form-group col-md-4">
                <label for="">Nome</label>
                <input type="text" class="form-control" value="{{ $pedido->cliente->nome }}" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="">Razão Social</label>
                <input type="text" class="form-control" placeholder="Razão Social"
                    value="{{ $pedido->cliente->razao_social }}" readonly>
            </div>
            <!-- linha -->
            <div class="form-group col-md-3">
                <label for="inputEmail4">Celular</label>
                <input type="text" class="form-control" placeholder="Celular" value="{{ $pedido->cliente->celular }}"
                    readonly>
            </div>

        </div>
    </div>
    <label for="" style="margin: 5px">Produto do pedido</label>
    <div class="conteudo overflow-table ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nome</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">U.valor</th>
                    <th scope="col">T.valor</th>
                </tr>
            </thead>
            <tbody class="overflow-table ">

                @foreach ($pedido->produtos as $key => $produto)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>
                            <form id="form.menos_{{ $produto->pivot->id }}"
                                action="{{ route('pedidoProduto.menos', ['pedidoProduto' => $produto->pivot->id, 'pedido' => $pedido->id]) }}"
                                method="post">
                                @method('PUT')
                                @csrf
                                <a href="#"
                                    onclick="document.getElementById('form.menos_{{ $produto->pivot->id }}').submit()">-</a>
                            </form> {{ $produto->pivot->quantidade }}
                            <form id="form.mais_{{ $produto->pivot->id }}"
                                action="{{ route('pedidoProduto.mais', ['pedidoProduto' => $produto->pivot->id, 'pedido' => $pedido->id]) }}"
                                method="post">
                                @method('PUT')
                                @csrf
                                <a href="#"
                                    onclick="document.getElementById('form.mais_{{ $produto->pivot->id }}').submit()">+</a>
                            </form>
                        </td>
                        <td id="valor">{{ $english_format_number = number_format($produto->valor, 2, ',', '.') }}
                        </td>
                        <td scope="row"id="valor">
                            {{ $english_format_number = number_format($produto->valor * $produto->pivot->quantidade, 2, ',', '.') }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <div class="conteudo">
        <h3>Total:</h3>
        <samp>{{ $english_format_number = number_format($pedido->valor_pedido, 2, ',', '') }}</samp>
    </div>

    <div class="conteudo">
        <div class="btn-group centro" role="group" aria-label="Exemplo básico">

            <form action="{{ route('pedido.finalizar', ['pedido' => $pedido->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <button type="submit" class="btn btn-secondary">Finalizar</button>

            </form>

            <form action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-secondary">Deletado</button>
            </form>


        </div>
    </div>
@endsection
