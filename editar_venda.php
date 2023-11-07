<?php
include_once('partials/header.php');
//url params query
if (isset($_GET['id'])) {
    $cpf = $_GET['id'];
} else {
    header('location:ver_venda.php');
}
$id = $_GET['id'];
?>

<?php
include_once('conexao.php');
?>

<div class="container">
    <form action="atualizar_venda.php" method="post">
        <?php
        //QUERY libera qualquer query
        $select = $conexao->query("SELECT valor, forma_pagamento, fk_clientes_cpf, fk_funcionarioos_cpf FROM id where id=$id");
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "

        <label for='' class='form-label'>Valor a Pagar:</label>
        <input type='number' id='valor' name='valor' class='form-control'value=$linha[valor]  />

        
        <label for='' class='form-label'>Forma Pagamento:</label>
        <input type='text' id='forma_pagamento' name='forma_pagamento' class='form-control' value=$linha[forma_pagamento]  />
        <!-- disable serve para mostrar o que tem no campo porem não vai conseguir mudar -->

        <label for='' class='form-label'> CPF do cliente: </label>
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