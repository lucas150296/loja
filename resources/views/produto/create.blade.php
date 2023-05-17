<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <div class="cadastro-e-editar">
        <p><img src="imagens/codigo de barra.png" alt="">Cadastro de produto</p>
        <p><img src="imagens/codigo de barra.png" alt="">Editar Produto</p>
        <nav class="navbar navbar-light bg-light" style="background-color: aqua">
            <form class="form-inline" >
                <input class="form-control mr-sm-2" type="search" placeholder="Código / Código Barras">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="imagens/binoculos.png"
                        alt="" class="pesquisa"> Pesquisa</button>
            </form>
        </nav>
        <hr>

        <form>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Código</label>
                    <input type="text" class="form-control" placeholder="Código">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Cód.barras</label>
                    <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Setor</label>
                    <select class="form-control">
                        <option>Select padrão</option>
                        <option value="">Cozinha</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Status</label>
                    <select class="form-control">
                        <option>Select padrão</option>
                        <option value="">Ativo</option>
                        <option value="">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Nome Produto</label>
                    <input type="text" class="form-control" placeholder="Nome Produto">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Preço</label>
                    <input type="" class="form-control" placeholder="Preço">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Custo</label>
                    <input type="" class="form-control" placeholder="Custo">
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Tipo Cadastro</label>
                    <select class="form-control">
                        <option>Select padrão</option>
                        <option value="">Revenda</option>
                        <option value="">Usu</option>
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Disponível P/Venda</label>
                    <select class="form-control">
                        <option>Select padrão</option>
                        <option value="">Sim</option>
                        <option value="">Nao</option>
                    </select>
                </div>


            </div>
            <div class="row" style="margin: 13px;">
                <div class="col">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                    <label class="form-check-label" for="formGroupExampleInput">Destaque</label>
                </div>
                <div class="col">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                    <label class="form-check-label" for="formGroupExampleInput">Oferta</label>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput">Valor Desconto %</label>
                    <input type="" class="form-control" placeholder="Valor Desconto %">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Confirmar</button>
        </form>

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
</body>

</html>
