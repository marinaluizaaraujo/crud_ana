<?php
include_once('conexao.php');
?>

<?php
include_once('partials/header.php');
?>

<table class="table">
    <tr>
        <th scope="col">CPF</th>
        <th scope="col">Carga Horaria</th>
        <th scope="col">Endereço</th>
        <th scope="col">telefone</th>
        <th scope="col">Nome</th>
    </tr>

    <?php
    //QUERY libera qualquer query
    $select = $conexao->query('SELECT cpf, carga_horaria, endereco, telefone, nome FROM funcionarioos');
    while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td scope='row'>{$linha['cpf']}</td>
                <td> {$linha['carga_horaria']} </td>
                <td>{$linha['endereco']}</td>
                <td>{$linha['telefone']}</td>
                <td>{$linha['nome']}</td>
                <td><a href='editar_funcionarios.php?cpf=$linha[cpf]'><span class='material-symbols-outlined'>edit</span></a>
                <a href='deletar_funcionarios.php?cpf=$linha[cpf]'> <span class='material-symbols-outlined'>delete</span></a> </td>
                </tr>";
    }
    ?>
</table>




<?php
include_once('partials/footer.php');
?>