
<table class="table-responsive table table-striped table-danger">
    <thead>
        <tr>
            <th scope="col">Cod</th>
            <th scope="col">Nome</th>
            <th scope="col">Estator</th>
            <th scope="col">Edita</th>
            <th scope="col">Deleta</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($produtos as $key => $produto)
            <tr id="{{$produto->cod_barras}}">
                <th scope="row">{{ $produto->codigo }}</th>
                <td>{{ $produto->nome }}</td>
                <td>
                    @if ($produto->disponivel_venda == 1)
                        ativo
                    @else
                        desativo
                    @endif
                </td>
                <td>
                    <a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Edita</a>
                </td>
                <th scope="col">

                    <form id="form_{{ $produto->id }}" method="post"
                        action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                        @method('DELETE')
                        @csrf
                        <!--<button type="submit">Excluir</button>-->
                        <a href="#"
                            onclick="document.getElementById('form_{{ $produto->id }}').submit()">Excluir</a>
                    </form>

                </th>
            </tr>
        @endforeach

    </tbody>

</table>
