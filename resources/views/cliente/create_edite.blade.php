<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('config.css') }}">
</head>

<body style="background-color: aquamarine;">
    <!--menu principal-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light padding-0">
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Principal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Produtos</a>
                        <a class="dropdown-item" href="#">cliente</a>
                        <a class="dropdown-item" href="#">Fornecedores</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Relatório</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Financeiro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Fiscal</a>
                </li>

            </ul>
        </div>
    </nav>
    <!--sub menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light padding-0 ">
        <div class="collapse navbar-collapse nemuazul" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item sub-menu  ">
                    <a class="nav-link" href="#"><img src="imagens/clientes (1).png" class=""
                            alt="">cliente</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/clientes (1).png" class=""
                            alt="">Fornecedores</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/serviços.png" alt=""> Serviços</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/Usuário-HM.png" alt=""> Usuario</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/caixa.png" alt=""> Caixa</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="conteudo">
        <form action="{{route('cliente.store')}}" method="POST">
            @csrf
            <!--dados cliente-->
            <label for="">Dado cliente</label>
            <div class="conteudo">
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="inputEmail4">pessoa</label>
                        <div class="form-check form-check-inline">
                            <input name="tipo_documento" class="form-check-input" type="radio" name="pessoa" id="inlineRadio1"
                                value="cpf">
                            <label class="form-check-label" for="inlineRadio1">CPF</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="tipo_documento" class="form-check-input" type="radio" name="pessoa" id="inlineRadio2"
                                value="cnpj">
                            <label class="form-check-label" for="inlineRadio2">CNPJ</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">CPF/CNPJ</label>
                        <input name="documento" type="text" class="form-control" placeholder="CPF/CNPJ" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Nome</label>
                        <input name="nome" type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Razão Social</label>
                        <input name="razao_social" type="text" class="form-control" placeholder="Razão Social">
                    </div>
                    <!-- linha -->
                    <div class="form-group col-md-3">
                        <label for="inputEmail4">Celular</label>
                        <input name="celular" type="text" class="form-control" placeholder="Celular" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Data Nascimento</label>
                        <input name="data_nascimento" type="date" class="form-control" placeholder="CPF/CNPJ" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Sexo</label>
                        <div class="form-check form-check-blok">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1"
                                value="masc">
                            <label class="form-check-label" for="inlineRadio1">Masc</label>
                        </div>
                        <div class="form-check form-check-blok">
                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2"
                                value="fem">
                            <label class="form-check-label" for="inlineRadio2">Fem</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Categoria</label>
                        <div class="form-check form-check-blok">
                            <input class="form-check-input" type="radio" name="categoria" id="inlineRadio1"
                                value="consumidor">
                            <label class="form-check-label" for="inlineRadio1">Consumidor</label>
                        </div>
                        <div class="form-check form-check-blok">
                            <input class="form-check-input" type="radio" name="categoria" id="inlineRadio2"
                                value="revenda">
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
                            onchange="consultaCep()">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade"
                            placeholder="cidade" required >
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">estado</label>
                        <input type="text" class="form-control" id="estado" name="estado"
                            placeholder="estado" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Endereço</label>
                        <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Numero</label>
                        <input type="text" class="form-control" placeholder="Numero" name="numero">
                    </div>
                    <!-- linha -->

                    <div class="form-group col-md-3">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" required name="bairro">
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
                        <input type="text" class="form-control" aria-label="Quantia" name="limite_credito">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div>
                            <label for="">Dia de vencimento</label>
                            <input type="text" class="form-control" placeholder="data_vecimento" required name="dia_vencimento">
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                            value="1" aria-label="..." name="cliente_inativo"><label for="">Cliente Inativo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox"
                            value="1" aria-label="..." name="venda_bloqueada"><label for="">Venda Bloqueada</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Outro</label>
                    <textarea class="form-control" name="outro" id="" cols="30" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/config.js') }}"></script>

</body>

</html>
