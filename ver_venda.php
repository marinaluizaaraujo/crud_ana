<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>

<table class="table">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Valor</th>
        <th scope="col">Forma Pagamento</th>
        <th scope="col">fk_clientes_cpf</th>
        <th scope="col">fk_funcionarioos_cpf</th>
    </tr>

    <?php
    //QUERY libera qualquer query
    $select = $conexao->query('SELECT valor, forma_pagamento, fk_clientes_cpf, fk_funcionarioos_cpf, FROM venda');
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td scope='row'>{$linha['id']}</td>
                <td> {$linha['valor']} </td>
                <td>{$linha['forma_pagamento']}</td>
                <td>{$linha['fk_clientes_cpf']}</td>
                <td>{$linha['fk_funcionarioos_cpf']}</td>
                <td><a href='editar_venda.php?id=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar_venda.php?id=$linha[id]'> <span class='material-symbols-outlined'>delete</span></a> </td>
                </tr>";
    }
    ?>
</table>




<?php
include_once('partials/footer.php');
?>