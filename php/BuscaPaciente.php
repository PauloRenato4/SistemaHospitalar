<?php 

include_once('conexao.php');

$cpf =$_POST['cpf'];

if(isset($_GET['cpf'])){
   $sql = "SELECT cpf FROM paciente WHERE cpf='$cpf'";
   $result = mysql_query($sql) or die (mysql_error());

    while ($linha = mysql_fetch_array($result)) {

    return $result;


    }


?>
