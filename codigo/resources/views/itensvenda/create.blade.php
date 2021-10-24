<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens venda</title>
</head>
<body>
    <form action="{{route(itensvendastore')}}" method="post">
        @csrf
        <label for="valorvenda">Valor venda</label>
        <input type="text" name="valorvenda" id="valorvenda">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        {{$idproduto}}
        {{$idvenda}}
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="hidden" name="idvenda" value={{$idvenda}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
