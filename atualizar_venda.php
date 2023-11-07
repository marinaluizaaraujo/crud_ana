<?php 
include_once('conexao.php');
$valor=$_POST['valor'];
$forma_pagamento=$_POST[' forma_pagamento'];
$fk_clientes_cpf = $_POST['fk_clientes_cpf '];
$fk_funcionarioos_cpf = $_POST['fk_funcionarioos_cpf']; 

echo ' '.$id. ' ' .$valor. ' '.$forma_pagamento. ' '.$fk_clientes_cpf .''.$fk_funcionarioos_cpf.'' ;


try{
    $update=$conexao->prepare("UPDATE venda SET valor=:valor, forma_pagamento=:forma_pagamento, fk_clientes_cpf=:fk_clientes_cpf, fk_funcionarioos_cpf=:fk_funcionarioos_cpf   WHERE fk_clientes_cpf;");
    $update->execute(
        [
            ':valor'=>$valor,
            ':forma_pagamento'=>$forma_pagamento,
            ':fk_clientes_cpf'=>$fk_clientes_cpf,
            ':fk_funcionarioos_cpf'=>$fk_funcionarioos_cpf
        ]
        );   
    header('location:ver_venda.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
