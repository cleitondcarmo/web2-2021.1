<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço</title>
</head>
<body>
    <form action="{{route(enderecostore')}}" method="post">
        @csrf
        <label for="valor">Valor</label>
        <input type="text" name="valor" id="valor">
        {{$idcliente}}
        <input type="hidden" name="idcliente" value={{$idcliente}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
