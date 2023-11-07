<?php 
include_once('conexao.php');
$cpf=$_POST['cpf'];
$carga_horaria=$_POST['carga_horaria'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$nome=$_POST['nome'];

echo ' '.$cpf. ' ' .$nome. ' '.$telefone. ' '.$endereco.''.$carga_horaria.'' ;


try{
    $update=$conexao->prepare("UPDATE funcionarioos SET carga_horaria=:carga_horaria, nome=:nome, endereco=:endereco, telefone=:telefone WHERE cpf=:cpf;");
    $update->execute(
        [
            ':carga_horaria'=>$carga_horaria,
            ':endereco'=>$endereco,
            ':nome'=>$nome,
            ':telefone'=>$telefone,
            ':cpf'=>$cpf
        ]
        );   
    header('location:ver_funcionarios.php');
    }catch(Exception $e){
        echo $e->getMessage();
    }
