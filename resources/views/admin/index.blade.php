<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('config.css')}}">
</head>

<body style="background-color: aquamarine;">
    <!--menu principal-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('admin')}}">Principal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{route('produto.create')}}">Produtos</a>
                      <a class="dropdown-item" href="{{route('cliente.create')}}">cliente</a>
                      <a class="dropdown-item" href="{{route('loja.create')}}">Lojas</a>
                      <a class="dropdown-item" href="{{route('produto.create')}}">Fornecedores</a>

                    </div>
                  </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('pedido.index')}}">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href link-nav="{{route('estoque.index')}}" >Estoques</a>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="collapse navbar-collapse nemuazul" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item sub-menu  ">
                    <a class="nav-link" href link-nav="{{route('cliente.index')}}"><img src="imagens/clientes (1).png" class="" alt="">cliente</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/clientes (1).png" class="" alt="">Fornecedores</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href link-nav="{{route('produto.index')}}"><img src="{{asset('imagens/img-produtos.png')}}" alt=""> Produtos</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href link-nav="{{route('loja.index')}}"><img src="{{asset('imagens/lojas.jpg')}}" alt=""> Lojas</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="#"><img src="imagens/serviços.png" alt=""> Serviços</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href link-nav="{{route('funcionario.index')}}"><img src="imagens/Usuário-HM.png" alt=""> Usuario</a>
                </li>
                <li class="nav-item sub-menu">
                    <a class="nav-link" href="{{route('caixa')}}"><img src="imagens/caixa.png" alt=""> Caixa</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="conteudo">

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="{{asset('js/config.js')}}"></script>
</body>

</html>
