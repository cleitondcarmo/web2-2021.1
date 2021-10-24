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
        <label for="logradouro">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro">
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade">
        <label for="uf">UF</label>
        <input type="text" name="uf" id="uf">
        {{$idcliente}}
        <input type="hidden" name="idcliente" value={{$idcliente}}>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
