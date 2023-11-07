<?php
include_once('partials/header.php');
?>

<form action="cadastra_funcionarios.php" method="post">
    <label for="cpf " class="form-label">Cpf:</label>
    <input type="text" name="cpf" id="cpf" class="form-control" />

    <label for="nome " class="form-label">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" />

    <label for="telefone" class="form-label">Endereço:</label>
    <input type="text" name="endereco" id="endereco" class="form-control" />

    <label for="senha" class="form-label">Telefone:</label>
    <input type="text" name="telefone" id="telefone" class="form-control" />

    <label for="carga_horaria" class="form-label">Carga Horaria:</label>
    <input type="text" name="carga_horaria" id="carga_horaria" class="form-control" />

    <p><button type="submit" class="btn btn-secondary">Registrar</button></p>

</form>

<p><a href="ver_funcionarios.php" class="btn btn-secondary">Ver todos os funcionários</a></p>

<?php
include_once('partials/footer.php');
?>