<div class="link_de_cadastro">
    <a href="{{route('funcionario.create')}}">Cadastra</a>

</div>

<table class="table-responsive table table-striped table-danger">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">loja</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($funcionarios as $key => $funcionario)
        <tr>
            <td>{{ $funcionario->id }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->loja->Nome_Fantasia }}</td>
        </tr>
        @endforeach

    </tbody>

</table>
