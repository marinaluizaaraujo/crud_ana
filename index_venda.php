<?php
include_once('partials/header.php');
?>
<form action="cadastra_venda.php" method="post">
        <label for="valor " class="form-label">Valor a Pagar:</label>
        <input type="number" name="valor" id="valor" class="form-control" />

        <label for="forma_pagamento" class="form-label">Forma de Pagamento:</label>
        <input type="text" name="forma_pagamento" id="forma_pagamento" class="form-control" />

        <label for="fk_clientes_cpf" class="form-label">CPF do Cliente::</label>
        <input type="text" name="fk_clientes_cpf" id="fk_clientes_cpf" class="form-control" />

        <p><button type="submit" class="btn btn-secondary">Registrar</button></p>

</form>

<p><a href="ver_venda.php" class="btn btn-secondary">Ver Todas as Vendas</a></p>

<?php
include_once('partials/footer.php');
?>