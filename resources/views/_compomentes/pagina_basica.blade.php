<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Eliana | Moveis e Eletro | {{ $pagina }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('config.css') }}">
</head>

<body style="background-color: darkgrey;">
    <div class="container" style="background-color: white;">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/66126101_2451916695030144_8131608908037881856_n.jpg" class="d-block w-100 "
                    alt="..." style="height: 750px;">
                <div class="carousel-caption d-none d-md-block div1">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light menu1">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="imagens/logo-leisure.png" alt=""
                                    class="logo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#"><img
                                                src="imagens/home.png" alt="" class="home"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">NOSSA HISTORIA</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            UNIDADES
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item"
                                                    href="https://www.lojaeliana.com.br/mtz.php">MATOZINHOS</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="https://www.lojaeliana.com.br/pl.php">PEDRO LEOPOLDO</a></li>
                                        </ul>
                                    <li class="nav-item">

                                        @if (isset($usuario->nome) && $usuario->nome != '')
                                            <a class="nav-link active" aria-current="page"
                                                href="{{ route('login.sair') }}">Sair</a>
                                        @else
                                            <a class="nav-link active" aria-current="page"
                                                href="{{ route('login.login') }}">Entra</a>
                                        @endif

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">EQUIPE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">BLOG</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">CONTATO</a>
                                    </li>
                                    </li>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                    <a href=""><img src="imagens/carrinho.png" alt="" class="home"
                                            style=" width: 39px; height: 35px; margin-right: 15px;"></a>
                                    <input class="form-control me-2" type="search" placeholder="Busca"
                                        aria-label="Search"
                                        style="
                          height: 38px;
                          width: 208px;">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="q">

            </div>

            <ul class="div2 list-unstyled">
                <!-- quarto -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        QUARTO
                    </a>
                    <ul class="dropdown-menu menu " aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/quadros.jpg);">
                        <li><a class="dropdown-item textmenu" href="#">guarda roupa</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item textmenu" href="#">comodas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item textmenu" href="#">camas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item textmenu" href="#">criados</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item textmenu" href="#">colchoes</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item textmenu" href="#">sapateira</a></li>

                    </ul>
                </li>
                <!-- sala -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SALA
                    </a>
                    <ul class="dropdown-menu menu textmenu" aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/sala.jpg);">
                        <li><a class="dropdown-item " href="#">Mesas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Home/Painel</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Buffet</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cristaleira</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">sofá</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Mesa de Centro</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Mesa de Computador</a></li>
                    </ul>
                </li>
                <!-- cozinha -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        COZINHA
                    </a>
                    <ul class="dropdown-menu menu textmenu" aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/cozinhajpg.jpg);">
                        <li><a class="dropdown-item" href="#">Armarios</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Fogoes</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Geladeiras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cooktop</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">panela</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Balçoes e Bancadas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Fornos eletricos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Fornos Microondas</a></li>
                    </ul>
                </li>
                <!-- linha infantil -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Linha Infantil
                    </a>
                    <ul class="dropdown-menu menu textmenu" aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/linha\ infanti.jpg);">
                        <li><a class="dropdown-item" href="#">Guarda Roupa Infantil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Berço</a></li>
                        <li><a class="dropdown-divider"></a></li>
                        <li><a class="dropdown-item" href="#">Mine cama</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Depoisto Retratil</a></li>

                    </ul>
                </li>
                <!-- eletrodomestico -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ELETRODOMESTICO
                    </a>
                    <ul class="dropdown-menu menu textmenu" aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/eletrodomésticos.jpg);">
                        <li><a class="dropdown-item" href="#">Lavadoras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Ventiladores</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"></a>Bebedouros</li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Liquidificador</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Ferro de Passar</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sanduicheiras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Cafeteiras</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Aspiradores de Pó</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Telefone</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Eletrônicos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Aparelho De Som</a></li>

                    </ul>
                </li>
                <!-- BRIQUEDOS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle black" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        BRIQUEDOS
                    </a>
                    <ul class="dropdown-menu menu textmenu" aria-labelledby="navbarDropdown"
                        style="background-image: url(imagens/briquedos.jpg);">

                        <li><a class="dropdown-item" href="#">Bicicletas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Carro e Motos Elétricas</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Triciclos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Vídeo game</a></li>

                    </ul>
                </li>
            </ul>
        </div>

        <h3 style="text-align: center;">Loja Eliana móveis e eletro </h3>
        <h2 style="text-align: center;">A escolha de quem tem bom gosto!</h2>
        <p class="texto-de-baixo-menu">A Loja Eliana Móveis e Eletro é uma empresa familiar já tradicional em
            Matozinhos e Pedro Leopoldo com 40 anos no mercado de móveis, eletro e artigos para presentes. Com um
            serviço de qualidade e atendimento diferenciado que começa dentro da loja até a entrega do produto, a Loja
            Eliana tornou-se referência de bom gosto e de compromisso.</p>
        <h2 style="text-align: center;">Produtos em destaque</h2>


        @yield('conteudo')

        <div class="flex-container" style="margin: 5%;">
            <div>
                <h5>Matozinhos</h5>
                <p>Av. Bento Gonçalves, 76, Centro - Matozinhos/MG</p>
                <p>Telefone: (31) 3712-2181</p>
            </div>
            <div>
                <h5>Pedor Leopoldo</h5>
                <p>R. José Píres de Araújo, 345a, Centro - Pedro Leopoldo/MG</p>
                <p>Telefone: (31) 3662-1033</p>
            </div>

            <div>
                <h5>Fale Conosco</h5>
                <a href="" class="textCor">Rastrear Pedido</a>
                <a href="" class="textCor">Contato</a>
                <a href="" class="textCor">Trabalhe conosco</a>
            </div>
            <div>
                <div style="flex-basis: 550px;" class="fb-page fb_iframe_widget"
                    data-href="https://www.facebook.com/elianaloja" data-tabs="" data-width="450"
                    data-height="450" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered"
                    fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=74&amp;height=450&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Felianaloja&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=450">
                    <span style="vertical-align: bottom; width: 451px; height: 130px;"><iframe name="f22ed144e208c"
                            width="450px" height="450px" data-testid="fb:page Facebook Social Plugin"
                            title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true"
                            allowfullscreen="true" scrolling="no" allow="encrypted-media"
                            src="https://www.facebook.com/v9.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1981b0949b5b7c%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff138448c224dec4%26relation%3Dparent.parent&amp;container_width=74&amp;height=450&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Felianaloja&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=&amp;width=450"
                            style="border: none; visibility: visible; width: 451px; height: 130px;"
                            class=""></iframe></span>
                </div>
            </div>
        </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0"
            nonce="0YujvASa"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
</body>

</html>
