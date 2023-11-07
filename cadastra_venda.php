<?php
include_once('conexao.php');
$valor=$_POST['valor'];
$forma_pagamento=$_POST[' forma_pagamento'];
$fk_clientes_cpf = $_POST['fk_clientes_cpf '];
$fk_funcionarioos_cpf = $_POST['fk_funcionarioos_cpf']; 

try {
    //somentes usaremos PREPARE na inserção de dados e na atualização de dados 
    $inserir = $conexao->prepare('INSERT INTO venda (valor, forma_pagamento, fk_clientes_cpf, fk_funcionarioos_cpf) VALUES (:valor, :forma_pagamento, :fk_clientes_cpf, :fk_funcionarioos_cpf )');
    $inserir->execute(
        [
            ':valor' => $valor,
            ':forma_pagamento' => $forma_pagamento,
            ':fk_clientes_cpf' => $fk_clientes_cpf,
            ':fk_funcionarioos_cpf' => $fk_funcionarioos_cpf
            ]
    );
    echo $inserir->rowCount();
    header('location:ver_venda.php');
} catch (PDOException $erro) {
    echo $erro->getMessage();
    header('location:index_venda.php');
}
;
