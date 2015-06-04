<?php 

include_once('conexao.php');



$result = mysql_query('SELECT * FROM paciente');

echo "PACIENTES CADASTRADOS";

echo "<table width='300px' border='1px'><tr><td>NOME</td><td>SOBRENOME</td><td>CPF </td><td>RG </td><td>NACIONALIDADE</td><td>EMAIL</td><td>NASCIMENTO </td><td>IDADE</td>
<td>DDD</td><td>CELULAR </td><td>SEXO</td><td>CHEKE</td><td>mensagem</td></tr>";
  while($row = mysql_fetch_array($result)) {

  
echo "<tr><td>" 
. $row['nome'] . "</td><td>" . $row['sobrenome']. "</td><td>" . $row['cpf']. "</td><td>" . $row['rg']. "</td><td>" . $row['nacionalidade'].
 "</td><td>" .  $row['email']. "</td><td>" . $row['nascimento']. "</td><td>" . $row['idade']. "</td><td>" . $row['ddd'].
"</td><td>" . $row['celular']. "</td><td>" . $row['sexo']. "</td><td>" . $row['checke']. "</td><td>" . $row['mensagem']."</td></tr> ";

}

echo "</table>"; 



 ?>