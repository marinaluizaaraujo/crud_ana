<?php
include_once('conexao.php');
$horario = $_POST['horario'];
$data = $_POST['data'];
$fk_clientes_cpf = $_POST['fk_clientes_cpf'];

try {
    //somentes usaremos PREPARE na inserção de dados e na atualização de dados 
    $inserir = $conexao->prepare('INSERT INTO agenda (horario, data, fk_clientes_cpf) VALUES (:horario, :data, :fk_clientes_cpf )');
    $inserir->execute(
        [
            ':horario' => $horario,
            ':data' => $data,
            ':fk_clientes_cpf' => $fk_clientes_cpf


            ]
    );
    echo $inserir->rowCount();
    header('location:ver_agenda.php');
} catch (PDOException $erro) {
    echo $erro->getMessage();
    header('location:index_agenda.php');
}
;
