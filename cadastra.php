<?php
include_once('conexao.php');
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = hash("md5", $_POST['senha']);
$confirmarSenha = hash("md5", $_POST['confirmarSenha']);
$tipo = $_POST['tipo'];


if ($senha == $confirmarSenha) {
    try {
        //somentes usaremos PREPARE na inserção de dados e na atualização de dados 
        $inserir = $conexao->prepare('INSERT INTO clientes (cpf,nome, telefone, email, senha, tipo) VALUES (:cpf, :nome, :telefone, :email,:senha, :tipo )');
        $inserir->execute(
            [
                ':cpf' => $cpf,
                ':nome' => $nome,
                ':telefone' => $telefone,
                ':email' => $email,
                ':senha' => $senha,
                ':tipo' => $tipo
            ]
        );
        header('location:ver_usuarios.php');
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
} else {
    //redireciona o usuario para uma pagina escolhida
    header('location:index.php');
}
