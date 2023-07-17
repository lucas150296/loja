@extends('admin._compomentes.base')
@section('conteudo')
 <div class="conteudo cadastro-e-editar">
    <form action="{{route('loja.store')}}" method="post">
        @csrf
        <label for="">Dados da Lojas</label>
        <div class="conteudo">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">Endereco</label>
                    <input name="Endereco" type="text" class="form-control" placeholder="Endereco" required
                        value="{{ $loja->Endereco ?? old('Endereco') }}">
                </div>
                <div class="form-group col-md-1">
                    <label for="">Numero</label>
                    <input name="Endereco_Numero" type="number" class="form-control" placeholder="Nº" required
                        value="{{ $loja->Endereco_Numero ?? old('Endereco_Numero') }}">
                </div>
                <div class="col">
                    <label for="">Bairro</label>
                    <input name="Bairro" type="text" class="form-control" placeholder="Bairro" required
                        value="{{ $loja->Bairro ?? old('Bairro') }}">
                </div>
                <div class="col">
                    <label for="">Telefone</label>
                    <input type="text" name="Telefone" class="form-control" placeholder="Telefone" required value="{{$loja->Telefone ?? old('Telefone')}}">
                </div>
            </div>
            <!--linha-->
            <div class="form-row">
                <div class="col">
                    <label for="">Cidade</label>
                    <input type="text" name="Cidade" id="" class="form-control" placeholder="Cidade" value="{{$loja->Cidade ?? old('Cidade')}}">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Estado</label>
                    <input type="text" name="Estados" id="" class="form-control" placeholder="Estado" value="{{$loja->Estados ?? old('Estados')}}">
                </div>
            </div>
            <!--linha-->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="">CNPJ</label>
                    <input type="text" name="CNPJ" class="form-control" placeholder="CNPJ" value="{{$loja->CNPJ ?? old('CNPJ')}}">
                </div>
                <div class="col">
                    <label for="">Nome Fantasia</label>
                    <input type="text" class="form-control" name="Nome_Fantasia" placeholder="Nome Fantasia" value="{{$loja->Nome_Fantasia ?? old('Nome_Fantasia')}}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin: 15px">Salva</button>
        </div>
    </form>
 </div>
@endsection
