@extends('admin._compomentes.base')
@section('conteudo')
    <div class="conteudo cadastro-e-editar">

        @if (isset($cliente->id))
            <p><img src="{{ asset('imagens/clinete_edite_cadastro.png') }}" alt="">Editar cliente</p>
        @else
            <p><img src="{{ asset('imagens/clinete_edite_cadastro.png') }}" alt="">Cadastro de cliente</p>
        @endif


        <hr>

        @if (isset($cliente->id))
            <form name="cadastro" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
                <form action="{{ route('cliente.store') }}" method="POST">
                    @csrf
        @endif


        <!--dados cliente-->
        <label for="">Dado cliente</label>
        <div class="conteudo">
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="inputEmail4">pessoa</label>
                    <div class="form-check form-check-inline">
                        <input name="tipo_documento" class="form-check-input" type="radio" name="pessoa"
                            id="inlineRadio1" value="cpf"
                            @if (isset($cliente->id)) {{ $cliente->tipo_documento == 'cpf' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio1">CPF</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="tipo_documento" class="form-check-input" type="radio" name="pessoa"
                            id="inlineRadio2" value="cnpj"
                            @if (isset($cliente->id)) {{ $cliente->tipo_documento == 'cnpj' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio2">CNPJ</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="">CPF/CNPJ</label>
                    <input name="documento" type="text" class="form-control" placeholder="CPF/CNPJ" required
                        value="{{ $cliente->documento ?? old('documento') }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Nome</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome"
                        value="{{ $cliente->nome ?? old('nome') }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Razão Social</label>
                    <input name="razao_social" type="text" class="form-control" placeholder="Razão Social"
                        value="{{ $cliente->razao_social ?? old('raza_social') }}">
                </div>
                <!-- linha -->
                <div class="form-group col-md-3">
                    <label for="inputEmail4">Celular</label>
                    <input name="celular" type="text" class="form-control" placeholder="Celular" required
                        value="{{ $cliente->celular ?? old('celular') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Data Nascimento</label>
                    <input name="data_nascimento" type="date" class="form-control" placeholder="CPF/CNPJ" required
                        value="{{ $cliente->data_nascimento ?? old('data_nascimento') }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Sexo</label>
                    <div class="form-check form-check-blok">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="masc"
                            @if (isset($cliente->id)) {{ $cliente->sexo == 'masc' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio1">Masc</label>
                    </div>
                    <div class="form-check form-check-blok">
                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="fem"
                            @if (isset($cliente->id)) {{ $cliente->sexo == 'fem' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio2">Fem</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Categoria</label>
                    <div class="form-check form-check-blok">
                        <input class="form-check-input" type="radio" name="categoria" id="inlineRadio1" value="consumidor"
                            @if (isset($cliente->id)) {{ $cliente->categoria == 'consumidor' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio1">Consumidor</label>
                    </div>
                    <div class="form-check form-check-blok">
                        <input class="form-check-input" type="radio" name="categoria" id="inlineRadio2" value="revenda"
                            @if (isset($cliente->id)) {{ $cliente->categoria == 'revenda' ? 'checked' : null }} @endif>
                        <label class="form-check-label" for="inlineRadio2">Revenda</label>
                    </div>

                </div>
            </div>
        </div>
        <!--dados endereço-->
        <label for="">Endereço cliente</label>
        <div class="conteudo">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for>Cep</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Cep"
                        onkeyup="consultaCep()" value="{{ $cliente->cep ?? old('cep') }}" maxlength="9">
                </div>
                <div class="form-group col-md-3">
                    <label for="">cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="cidade"
                        required>
                </div>
                <div class="form-group col-md-1">
                    <label for="">estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="estado">
                </div>
                <div class="form-group col-md-4">
                    <label for="">Endereço</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco"
                        value="{{ $cliente->endereco ?? old('endereco') }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Numero</label>
                    <input type="text" class="form-control" placeholder="Numero" name="numero"
                        value="{{ $cliente->numero ?? old('numero') }}">
                </div>
                <!-- linha -->

                <div class="form-group col-md-3">
                    <label for="">Bairro</label>
                    <input type="text" class="form-control" placeholder="Bairro" required name="bairro"
                        value="{{ $cliente->bairro ?? old('bairro') }}">
                </div>

            </div>
        </div>
        <!--outro dados-->
        <label for="">Outro Dados</label>
        <div class="conteudo">
            <div class="form-group col-md-3">
                <label for="">Limite de Credito:</label>
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Quantia" name="limite_credito"
                        value="{{ $cliente->limite_credito ?? old('limite_credito') }}">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div>
                        <label for="">Dia de vencimento</label>
                        <input type="text" class="form-control" placeholder="data_vecimento" required
                            name="dia_vencimento" value="{{ $cliente->dia_vencimento ?? old('dia_vencimento') }}">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-3">
                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1"
                        aria-label="..." name="cliente_inativo"
                        @if (isset($clienete->id)) {{ $cliente->cliente_inativo == '1' ? 'checked' : null }} @endif><label
                        for="">Cliente
                        Inativo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1"
                        aria-label="..." name="venda_bloqueada"
                        @if (isset($clinete->id)) {{ $cliente->venda_bloqueada == '1' ? 'checked' : null }} @endif><label
                        for="">Venda
                        Bloqueada</label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Outro</label>
                <textarea class="form-control" name="outro" id="" cols="30" rows="3">{{ $cliente->outro ?? old('outro') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="margin: 5px">Salva</button>
            </form>
        </div>
    @endsection
