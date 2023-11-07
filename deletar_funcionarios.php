<?php 
include_once('conexao.php');
if (isset($_GET['cpf'])) {
    $cpf = $_GET['cpf'];
} else {
    header('location:ver_funcionarios.php');
}
try{
    $deletar=$conexao->query("DELETE FROM funcionarioos WHERE cpf=$cpf;");
    header("location:ver_funcionarios.php");
}catch(Exception $e){
    echo $e->getMessage();
}

?>