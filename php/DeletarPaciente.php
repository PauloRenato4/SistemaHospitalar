<?php 

include_once('conexao.php');

$id = $_GET['id']; // Recebendo o valor enviado pelo link

mysql_query("DELETE FROM nome_da_tabela WHERE id='".$id."'"); 

echo “Registro excluído com sucesso!”;

$id = $_GET['id']

mysql_query(“DELETE FROM nome_da_tabela WHERE id='”.$id.”‘”);


 ?>