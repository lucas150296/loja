<table class="table-responsive table table-striped table-danger">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Adicionar produto no estoque</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($estoques as $key => $estoque)
        <tr>
            <td>{{ $estoque->loja->id }}</td>
            <td>{{ $estoque->loja->Nome_Fantasia }}</td>
            <td><a href="{{route('estoqueProduto.create', ['estoque' => $estoque->id])}}">ADD Produto</a></td>
        </tr>
        @endforeach



    </tbody>

</table>
