<?php
include_once('partials/header.php');
//url params query
if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
} else {
    header('location:ver_funcionarios.php');
}
$cpf = $_GET['cpf'];
?>

<?php
include_once('conexao.php');
?>

<div class="container">
    <form action="atualizar_funcionarios.php" method="post">
        <?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT cpf,carga_horaria,endereco,telefone,nome FROM funcionarioos where cpf=$cpf");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "
        <label for='' class='form-label'> CPF: </label>
        <input type='text' id='cpf' name='cpf' class='form-control' value=$linha[cpf] disabled />

        <label for='' class='form-label'>Carga Horaria:</label>
        <input type='text' id='carga_horaria' name='carga_horaria' class='form-control'value=$linha[carga_horaria]  />

        
        <label for='' class='form-label'>endereco:</label>
        <input type='text' id='endereco' name='endereco' class='form-control' value=$linha[endereco]/>
        <!-- disable serve para mostrar o que tem no campo porem não vai conseguir mudar -->

        <label for='' class='form-label'> telefone: </label>
        <input type='text' id='telefone' name='telefone' class='form-control' value=$linha[telefone]  />

        <label for='' class='form-label'>Nome:</label>
        <input type='text' id='Nome' name='Nome' class='form-control' value=$linha[Nome]  />


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