<?php 

include_once('conect.php');


$nome = $_POST['nome'];
 mysql_query("DELETE FROM paciente  WHERE nome='{$nome}'") or die(mysql_error()); 



 ?>