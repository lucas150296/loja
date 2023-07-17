<table class="table-responsive table table-striped table-danger">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome fantasia</th>
            <th scope="col">Estoque</th>
            <th scope="col">Edita</th>
            <th scope="col">Deleta</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($lojas as $key => $loja)
            <td>{{ $loja->id }}</td>
            <td>{{ $loja->Nome_Fantasia }}</td>
            <td><a href="">Estoque</a></td>


            <td>
                <a href="{{ route('loja.edit', ['loja' => $loja->id]) }}">Edita</a>
            </td>
            <th scope="col">

                <form id="form_{{ $loja->id }}" method="post"
                    action="{{ route('loja.destroy', ['loja' => $loja->id]) }}">
                    @method('DELETE')
                    @csrf
                    <a href="#" onclick="document.getElementById('form_{{ $loja->id }}').submit()">Excluir</a>
                </form>

            </th>
            </tr>
        @endforeach

    </tbody>

</table>
