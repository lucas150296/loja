<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>caixa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('config.css') }}">
</head>

<body style="background-color: rgb(176, 163, 146)">
    <div class="caixa">
        <nav class="nav">
            <button type="button" class="btn btn-primary" onclick="preVenda()">Pre-venda</button>
            <a class="nav-link" href="#">Pagamento</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#">Desativado</a>
        </nav>
        <div class="log"></div>
        <div class="cod">

            <div class="form-row">
                <div class="col">
                    <label for="exampleInputPassword1">Código</label>
                    <input type="number" class="form-control" id="codigo" placeholder="Código">
                </div>
                <div class="col">
                    <label for="exampleInputPassword1">Quantidade</label>
                    <input type="text" class="form-control" id="quantidade" placeholder="Sobrenome" value="1">
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="exampleInputPassword1">Valor</label>
                    <input type="text" class="form-control" placeholder="Nome" value="">
                </div>
                <div class="col">
                    <label for="exampleInputPassword1">SubTotal</label>
                    <input type="text" class="form-control" placeholder="Sobrenome">
                </div>
            </div>
        </div>
        <div class="list" id="lista">

        </div>
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
    <script>
        document.body.addEventListener('keypress', function(evento) {
            const code = evento.keyCode;

            switch (code) {
                case 42:

                    // munda o valor da quantidade no clique da tecla *
                    const valor = document.getElementById('codigo')

                    const quantidade = document.querySelector('#quantidade')
                    quantidade.value = valor.value
                    valor.value = ""
                    break;
                case 99:
                    // vai chamar a funchal de cancelamento de produto na tecla "c"


                    break;
                case 103:
                    //vaia chamar a funchal de consulta de preço na tecla "g"


                    break;

                case 102:
                    // vai chamar a funchal de finalização "f"

                    break;

                default:
                    break;
            }


            console.log(` code: ${code}`)
        })
    </script>
</body>

</html>
