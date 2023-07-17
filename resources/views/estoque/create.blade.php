@extends('admin._compomentes.base')
@section('conteudo')
    <div class="conteudo cadastro-e-editar">
        <form action="{{ route('estoqueProduto.store', ['estoque' => $estoque->id]) }}" method="post">
            @csrf
            <label for="">cod Produto</label>
            <div class="conteudo">
                <div class="form-row">

                    <div class="form-group col-md">
                        <label for="">cod. produto</label>
                        <input name="cod" type="text" class="form-control" placeholder="cod.produto" required
                            value="{{ old('cod') ? old('cod') : '' }}">
                            {{$errors->has('cod') ? $errors->first('cod') : ''}}
                    </div>
                    <div class="form-group col-md">
                        <label for="">Quantidade</label>
                        <input name="quantidade" type="text" class="form-control" placeholder="0" required
                            value="{{ old('quantidade') ? old('quantidade') : '' }}">
                            {{$errors->has('quantidade') ? $errors->first('quantidade') : ''}}
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 5px">Salva</button>
        </form>
        <hr>
        <br>
        <table class="table table-info" style="">
            <thead>
                <tr>
                    <th scope="col">Nome do produto</th>
                    <th scope="col">Quantidade no estoque</th>
                    <th scope="col">Deletar</th>
                </tr>
            <tbody>
                </thead>

                @foreach ($estoque->produtos as $produto)
                    <tr>

                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->pivot->quantidade }}</td>
                        <td >
                            <form id="form_{{ $produto->pivot->id }}" method="post"
                                action="{{ route('estoqueProduto.destroy', ['estoqueProduto' => $produto->pivot->id, 'estoque' => $estoque->id]) }}">
                                @method('DELETE')
                                @csrf
                                <a href="#"
                                    onclick="document.getElementById('form_{{ $produto->pivot->id }}').submit()">Excluir</a>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
