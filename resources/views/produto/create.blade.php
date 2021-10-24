<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produto</title>
</head>
<body>
    <form action="{{route(produtostore')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="frete">Frete</label>
        <input type="text" name="frete" id="frete">
        <label for="valordecompra">Valor de compra</label>
        <input type="text" name="valordecompra" id="valordecompra">
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="desconto">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <label for="valordevenda">Valor de venda</label>
        <input type="text" name="valordevenda" id="valordevenda">
        <input type="hidden" name="idproduto" value={{$idproduto}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
