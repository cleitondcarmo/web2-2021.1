<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css da aplicaçao -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <title>@yield('Titulo')</title>
</head>

<body>
    <div id="container">
        <div id="logo" class="containerLogo">
            <img src="{{route('imgproduto')}}/logo.png">
        </div>
        <div id="bside" class="containerAlgo">
            <img src="{{route('imgproduto')}}/bside.png">
        </div>
        <div id="header" class="containerHeader">
            <h1>Sistema de vendas</h1>
        </div>
        <div id="nav" class="containerNav">
            <ul class="nav justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('listacliente')}}">Clientes</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('clientecreate')}}">Cadastrar clientes</a></li>
                        <li><a class="dropdown-item" href="{{route('listacliente')}}">Listar clientes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('listaproduto')}}">Produtos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('produtocreate')}}">Cadastrar produtos</a></li>
                        <li><a class="dropdown-item" href="{{route('listaproduto')}}">Listar produtos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('listafornecedor')}}">Fornecedores</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('fornecedorcreate')}}">Cadastrar fornecedores</a></li>
                        <li><a class="dropdown-item" href="{{route('listafornecedor')}}">Listar fornecedores</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Vendas</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('vendacreate')}}">Cadastrar vendas</a></li>
                        <li><a class="dropdown-item" href="{{route('listavenda')}}">Listar vendas</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Endereços</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('enderecocreate')}}">Cadastrar endereços</a></li>
                        <li><a class="dropdown-item" href="{{route('listaendereco')}}">Listar endereços</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="conteudo" class="containerConteudo">
            @yield('conteudo')
        </div>
        <div id="aside" class="containerAside">
            <img src="{{route('imgproduto')}}/propaganda1.jpeg">
            <img src="{{route('imgproduto')}}/propaganda2.png">
            <img src="{{route('imgproduto')}}/propaganda3.jpg">
        </div>
        <div id="footer" class="containerFooter">
            Copyright @ WebII
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
