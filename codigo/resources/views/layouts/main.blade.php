<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- css da aplicaçao -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }}">

    <title>@yield('Titulo')</title>
</head>

<body>
    <div id="container">
        <div id="aside" class="containerAside">
            <div>
                <div id="painel">
                    <a href="{{route('showdashboard')}}"><img src="{{route('imgproduto')}}/Painel.png"></a>
                </div>
            </div>
            <div>
                <div id="cliente">
                    <a href="{{route('listacliente')}}"><img src="{{route('imgproduto')}}/Clientes.png"></a>
                </div>
                <div id="produtos">
                    <a href="{{route('listaproduto')}}"><img src="{{route('imgproduto')}}/Produtos.png"></a>
                </div>
                <div id="categorias">
                    <a href="{{route('listacategorias')}}"><img src="{{route('imgproduto')}}/Categorias.png"></a>
                </div>
                <div id="vendas">
                    <a href="{{route('listavenda')}}"><img src="{{route('imgproduto')}}/Vendas.png"></a>
                </div>
                <div id="compras">
                    <a href="{{route('listacompras')}}"><img src="{{route('imgproduto')}}/Compras.png"></a>
                </div>
                <div id="fornecedor">
                    <a href="{{route('listafornecedor')}}"><img src="{{route('imgproduto')}}/Fornecedor.png"></a>
                </div>
                <div id="financas">
                    <a href="{{route('showfinancas')}}"><img src="{{route('imgproduto')}}/Financas.png"></a>
                </div>
                <div id="relatorios">
                    <a href="{{route('showrelatorios')}}"><img src="{{route('imgproduto')}}/Relatorios.png"></a>
                </div>
            </div>
            <div>
                <div id="logout">
                    <a href="{{route('listavenda')}}"><img src="{{route('imgproduto')}}/Logout.png"></a>
                </div>
            </div>
        </div>
        <div id="nav" class="containerNav">
            <img src="{{route('imgproduto')}}/logo.png">
        </div>
        <div id="conteudo" class="containerConteudo">
            @yield('conteudo')
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
