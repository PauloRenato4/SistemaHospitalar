<?php 

include_once('conect.php');

$nomeExame = $_POST['nomeExame'];

if( mysqli_query($con,"INSERT INTO exame(nomeExame) VALUES ('$nomeExame')"))

	echo "Cadastro Realizado Com Sucesso!";

else
echo "Cadastro Nao Realizado";

 ?>