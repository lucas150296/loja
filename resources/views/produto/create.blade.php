@extends('admin._compomentes.base')
@section('conteudo')
    <div class="cadastro-e-editar">
        @if (isset($produto->id))
            <p><img src="{{ asset('imagens/codigo de barra.png') }}" alt="">Editar Produto</p>
        @else
            <p><img src="{{ asset('imagens/codigo de barra.png') }}" alt="">Cadastro de produto</p>
        @endif


        <hr>

        @if (isset($produto->id))
            <form name="cadastro" action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
                <form name='cadastro' method="POST" action="{{ route('produto.store') }}" enctype="multipart/form-data">
                    @csrf
        @endif

        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">Código</label>
                <input name="codigo" type="text" class="form-control" placeholder="Código"
                    value="{{ $produto->codigo ?? old('codigo') }}" required>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Cód.barras</label>
                <input name="cod_barras" type="text" class="form-control" placeholder="Cod.barras"
                    value="{{ $produto->cod_barras ?? old('cod_barras') }}">
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Setor</label>
                <select name="setor_id" class="form-control" required>
                    <option>Escola</option>
                    @foreach ($setores as $key => $setor)
                        <option value="{{ $setor->id }}"
                            {{ ($produto->setor_id ?? old('setor_id')) == $setor->id ? 'selected' : '' }}>
                            {{ $setor->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Status</label>
                <select name="status" class="form-control" required>
                    <option value="">opção</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">Nome Produto</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome Produto"
                    value="{{ $produto->nome ?? old('nome') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="formGroupExampleInput">Preço</label>
                <input name="valor" type="" class="form-control" placeholder="Preço"
                    value="{{ $produto->valor ?? old('valor') }}" required>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Custo</label>
                <input name="custo" type="" class="form-control" placeholder="custo"
                    value="{{ $produto->custo ?? old('custo') }}" required>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Tipo Cadastro</label>
                <select name="tipo_Cadastro" class="form-control" required>
                    <option value="">opção</option>
                    <option value="0">Revenda</option>
                    <option value="1">Usu</option>
                </select>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Disponível P/Venda</label>
                <select name="disponivel_venda" class="form-control" required>
                    <option value="">opção</option>
                    <option value="1">Sim</option>
                    <option value="0">Nao</option>
                </select>
            </div>


        </div>
        <div class="row" style="margin: 13px;">
            <div class="col">
                <label class="formGroupExampleInput">Destaque</label>
                <select name="destaque" class="from-control" required>
                    <option value="">opção</option>
                    <option value="1">Ativo</option>
                    <option value="0">Desativo</option>
                </select>
            </div>
            <div class="col">
                <label class="formGroupExampleInput">Oferta</label>
                <select name="oferta" id="oferta" class="from-control" onchange="checarOferta(this.value)" required>
                    <option value="">opção</option>
                    <option value="1">Ativo</option>
                    <option value="0">Desativo</option>
                </select>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Valor Desconto %</label>
                <input name="valorDesconto" type="" class="form-control ofertas" placeholder="Valor Desconto %"
                    disabled value="{{ $produto->valor_desconto ?? old('valor_desconto') }}">
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Data de fim da oferta</label>
                <input name="data_f_oferta" type="date" class="form-control ofertas " placeholder="" disabled
                    value="{{ $produto->data_f_oferta ?? old('data_f_oferta') }}" onchange="checarData(this.value)">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Imagem Produto</label>
                    <input name="imagem" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @if (isset($produto->id))
                        <input name="imagemCapa" type="text" value="{{ $produto->imagemCapa ?? old('imagemCapa') }}">
                    @else

                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Confirmar</button>
        </form>

    </div>
@endsection
