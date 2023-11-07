<?php 
session_start();
include_once('../conexao.php');
include_once('../clientes/partials/header.php');
if(isset($_SESSION['tipo'])){
    $cpf=$_SESSION['cpf'];
if($_SESSION ['tipo']==0){
    include_once('../clientes/views/index.php');
    echo'
    <div class="container">
    <h1>Lista </h1>
    <table class="table">
        <tr>
            <th scope="col">Horario</th>
            <th scope="col">Data</th>
        </tr>';
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT horario,data_agendamento FROM agendamento WHERE cpf=$cpf');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                <td> {$linha['horario']} </td>
                <td>{$linha['data_agendamento']}</td>
                </tr>";
        }
        echo'</table>';
}
}
if($_SESSION['tipo']==1){
    include_once('../adm/index.php');
    echo'
    <div class="container">
    <h1>Lista </h1>
    <table class="table">
        <tr>
            <th scope="col">Horario</th>
            <th scope="col">Data</th>
        </tr>
        ';
        //QUERY libera qualquer query
        $select = $conexao->query('SELECT id,horario,data_agendamento,cpf FROM agendamento');
        while ($linha = $select->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
            <td scope='row'>{$linha['id']}</td>
                <td> {$linha['horario']} </td>
                <td>{$linha['data_agendamento']}</td>
                <td>{$linha['cpf']}</td>
                </tr>";
        }
   echo' </table>'
    ;

}else{
    header('location:../clientes/views/index.php');
}
?>