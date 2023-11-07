<?php 
include_once('conexao.php');
if (isset($_GET['id'])) {
    $cpf = $_GET['id'];
} else {
    header('location:ver_agenda.php');
}
try{
    $deletar=$conexao->query("DELETE FROM agenda WHERE id=$id;");
    header("location:ver_agenda.php");
}catch(Exception $e){
    echo $e->getMessage();
}

?>