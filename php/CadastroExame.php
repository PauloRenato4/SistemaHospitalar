<?php 

include_once('conect.php');

$nomeExame = $_POST['nomeExame'];

if( mysql_query("INSERT INTO exame(nomeExame) VALUES ('$nomeExame')"))

	echo "Cadastro Realizado Com Sucesso!";

else
echo "Cadastro Nao Realizado";

 ?>