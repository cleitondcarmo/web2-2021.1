<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens entrada</title>
</head>
<body>
    <form action="{{route(itensentradastore')}}" method="post">
        @csrf
        <label for="precocompra">Preço compra</label>
        <input type="text" name="precocompra" id="precocompra">
        <label for="unidade">Unidade</label>
        <input type="text" name="unidade" id="unidade">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        {{$identrada}}
        {{$idproduto}}
        <input type="hidden" name="identrada" value={{$identrada}}>
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
