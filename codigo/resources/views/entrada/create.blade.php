<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <form action="{{route(entradastore')}}" method="post">
        @csrf
        <label for="valortotal">Valor total</label>
        <input type="text" name="valortotal" id="valortotal">
        {{$idfornecedor}}
        <input type="hidden" name="idfornecedor" value={{$idfornecedor}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
