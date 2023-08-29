<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Data</th>
            <th scope="col">Loja</th>
            <th scope="col">Abri</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente->pedidos as $key => $pedido)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>
                    @if ($pedido->created_at != '')
                         {{$pedido->created_at->format("d/m/Y")}}
                    @endif
                </td>
                <td>{{ $pedido->loja->Nome_Fantasia }}</td>
                <td>
                    @foreach ($pedido->produtos as $key => $produto)
                        <p>{{ $produto->nome }}</p>
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
