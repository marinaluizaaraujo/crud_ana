<?php
include_once('conexao.php');
$cpf = $_POST['cpf'];
$carga_horaria = $_POST['carga_horaria'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$nome = $_POST['nome'];

try {
    //somentes usaremos PREPARE na inserção de dados e na atualização de dados 
    $inserir = $conexao->prepare('INSERT INTO funcionarioos (cpf,carga_horaria, endereco, telefone, nome) VALUES (:cpf, :carga_horaria, :endereco, :telefone,:nome )');
    $inserir->execute(
        [
            ':cpf' => $cpf,
            ':carga_horaria' => $carga_horaria,
            ':endereco' => $endereco,
            ':telefone' => $telefone,
            ':nome' => $nome


            ]
    );
    echo $inserir->rowCount();
    header('location:ver_funcionarios.php');
} catch (PDOException $erro) {
    echo $erro->getMessage();
    header('location:index_funcionarios.php');
}
;
