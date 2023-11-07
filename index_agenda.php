<?php
include_once('partials/header.php');
?>

<form action="cadastra_agenda.php" method="post">
    <label for="horario " class="form-label">Horario:</label>
    <input type="text" name="horario" id="horario" class="form-control" />

    <label for="data" class="form-label">Data:</label>
    <input type="text" name="data" id="data" class="form-control" />

    <label for="fk_clientes_cpf" class="form-label">CPF do Cliente:</label>
    <input type="text" name="fk_clientes_cpf" id="fk_clientes_cpf" class="form-control" />

    <p><button type="submit" class="btn btn-secondary">Registrar</button></p>

</form>

<p><a href="ver_agenda.php" class="btn btn-secondary">Ver toda a Agenda</a></p>

<?php
include_once('partials/footer.php');
?>