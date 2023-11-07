<?php 
include_once('conexao.php');
$horario=$_POST['horario'];
$data=$_POST['data'];
$fk_clientes_cpf=$_POST['fk_clientes_cpf'];

echo ' '.$horario. ' ' .$data. ' '.$fk_clientes_cpf. ' ';


try{
    $update=$conexao->prepare("UPDATE agenda SET horario=:horario, data=:data, fk_clientes_cpf=:fk_clientes_cpf WHERE fk_clientes_cpf=:fk_clientes_cpf;");
    $update->execute(
        [
            ':horario'=>$horario,
            ':data'=>$data,
            ':fk_clientes_cpf'=>$fk_clientes_cpf
        ]
        );   
    header('location:ver_agenda.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
