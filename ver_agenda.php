<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>

<table class="table">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Horario</th>
        <th scope="col">Data</th>
        <th scope="col">fk_clientes_cpf</th>
    </tr>

    <?php
    //QUERY libera qualquer query
    $select = $conexao->query('SELECT id, horario, data, fk_clientes_cpf FROM agenda');
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td scope='row'>{$linha['id']}</td>
                <td> {$linha['horario']} </td>
                <td>{$linha['data']}</td>
                <td>{$linha['fk_clientes_cpf']}</td>
                <td><a href='editar_agenda.php?id=$linha[id]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar_agenda.php?id=$linha[id]'> <span class='material-symbols-outlined'>delete</span></a> </td>
                </tr>";
    }
    ?>
</table>




<?php
include_once('partials/footer.php');
?>