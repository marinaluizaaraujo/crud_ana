<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form action="cadastra.php" method="post">
        <label for="cpf " class="form-label">Cpf:</label>
        <input type="text" name="cpf" id="cpf" class="form-control" />

        <label for="nome " class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" />

        <label for="email" class="form-label">Email:</label>
        <input type="text" name="email" id="email" class="form-control" />

        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control" />

        <label for="senha" class="form-label">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" />

        <label for="confirmarSenha" class="form-label">Confirmar Senha:</label>
        <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control" />


        <label for="tipo" class="form-label">Tipo:</label>
        <input type="number" name="tipo" id="tipo" class="form-control" />

        <p><button type="submit" class="btn btn-secondary">Registrar</button></p>

    </form>

    <p><a href="ver_usuarios.php" class="btn btn-secondary">Ver todos os Clientes</a></p>

</body>

</html>