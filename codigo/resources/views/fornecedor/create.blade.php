<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedor</title>
</head>
<body>
    <form action="storefornecedor" method="post">
        @csrf
        <label for="">Nome fornecedor</label>
        <input type="text" name="nome" id="nome">
        <label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco">
        <label for="">E-mail</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>
