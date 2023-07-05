<table class="table-responsive table table-striped table-danger">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF/CNPJ</th>
            <th scope="col">Info+</th>
            <th scope="col">Edita</th>
            <th scope="col">Deleta</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($clientes as $key => $cliente)
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->documento }}</td>
            <td>
                <a href="">Info+</a>
            </td>

            <td>
                <a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Edita</a>
            </td>
            <th scope="col">

                <form id="form_{{ $cliente->id }}" method="post"
                    action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}">
                    @method('DELETE')
                    @csrf
                    <a href="#" onclick="document.getElementById('form_{{ $cliente->id }}').submit()">Excluir</a>
                </form>

            </th>
            </tr>
        @endforeach

    </tbody>

</table>
