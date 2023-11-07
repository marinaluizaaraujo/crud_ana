<?php 
include_once('conexao.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location:ver_venda.php');
}
try{
    $deletar=$conexao->query("DELETE FROM venda WHERE id=$id;");
    header("location:ver_venda.php");
}catch(Exception $e){
    echo $e->getMessage();
}

?>