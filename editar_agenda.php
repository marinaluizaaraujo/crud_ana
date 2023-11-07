<?php
include_once('partials/header.php');
//url params query
if (isset($_GET['id'])) {
    $cpf = $_GET['id'];
} else {
    header('location:ver_agenda.php');
}
$id = $_GET['id'];
?>

<?php
include_once('conexao.php');
?>

<div class="container">
    <form action="atualizar_id.php" method="post">
        <?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT horario, data, fk_clientes_cpf FROM agenda where id=$id");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'>Horario:</label>
        <input type='time' id='horario' name='horario' class='form-control'value=$linha[horario]  />

        
        <label for='' class='form-label'>Data:</label>
        <input type='date' id='data' name='data' class='form-control' value=$linha[data] />
        <!-- disable serve para mostrar o que tem no campo porem não vai conseguir mudar -->

        <label for='' class='form-label'> cpf cliente: </label>
        <input type='text' id='fk_clientes_cpf' name='fk_clientes_cpf' class='form-control' value=$linha[fk_clientes_cpf]  />

        <button type='submit' class='btn btn-success mt-2'> Atualizar </button>
        <button type='reset' class='btn btn-danger mt-2'> Limpar Formulario </button>
        <!-- mt-2 é margin top  -->
        
       ";
        }
        ?>
    </form>
</div>
<!-- readonli estava no final onde é o forma pagamento -->

<?php
include_once('partials/footer.php')
?>