@extends('admin._compomentes.base')
@section('conteudo')
    <div class="conteudo cadastro-e-editar">

        @if (isset($funcionario->id))
            <p><img src="{{ asset('imagens/clinete_edite_cadastro.png') }}" alt="">Editar cliente</p>
        @else
            <p><img src="{{ asset('imagens/clinete_edite_cadastro.png') }}" alt="">Cadastro de cliente</p>
        @endif

        <hr>

        @if (isset($funcionario->id))
            <form name="cadastro" action="{{ route('funcionario.update', ['funcionario' => $funcionario->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
                <form action="{{ route('funcionario.store') }}" method="POST">
                    @csrf
        @endif

        <!--dados cliente-->
        <label for="">Dado funcionario</label>
        <div class="conteudo">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome"
                        value="{{ $funcionario->nome ?? old('nome') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Loja</label>
                    <select class="form-select" id="inputGroupSelect01" name="loja_id">
                        <option selected>escolha...</option>
                        @foreach ($lojas as $loja)
                            <option value="{{ $loja->id }}">{{ $loja->Nome_Fantasia }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Função</label>
                    <input name="funcao" type="number" class="form-control" placeholder="Função" required
                        value="{{ $funcionario->funcao ?? old('funcao') }}">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Nome"
                        value="{{ $funcionario->email ?? old('email') }}">
                </div>

                <div class="form-group col-md-3">
                    <label for="">Senha</label>
                    <input name="senha" type="password" class="form-control"  required>
                </div>

            </div>
        </div>

        <button type="submit">Salva</button>
    </div>
@endsection
