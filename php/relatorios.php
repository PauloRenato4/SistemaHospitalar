<?php 
include_once('conect.php');

$result = mysqli_query($con,'SELECT * FROM paciente');
echo "PACIENTES CADASTRADOS";
echo "<table width='300px' border='1px'><tr><td>NOME</td><td>SOBRENOME</td><td>CPF </td><td>RG </td><td>NACIONALIDADE</td><td>EMAIL</td><td>NASCIMENTO </td><td>IDADE</td>
<td>DDD</td><td>CELULAR </td><td>SEXO</td><td>CHEKE</td><td>mensagem</td></tr>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  
echo "<tr><td>" 
. $row['nome'] . "</td><td>" . $row['sobrenome']. "</td><td>" . $row['cpf']. "</td><td>" . $row['rg']. "</td><td>" . $row['nacionalidade'].
 "</td><td>" .  $row['email']. "</td><td>" . $row['nascimento']. "</td><td>" . $row['idade']. "</td><td>" . $row['ddd'].
"</td><td>" . $row['celular']. "</td><td>" . $row['sexo']. "</td><td>" . $row['checke']. "</td><td>" . $row['mensagem']."</td></tr> ";
}
echo "</table>"; 

$result = mysqli_query($con,'SELECT * FROM medico');
echo "<BR><BR>MEDICOS CADASTRADOS";
echo "<table width='300px' border='1px'><tr><td>NOME</td><td>SOBRENOME</td><td>CPF </td><td>RG </td><td>NACIONALIDADE</td><td>EMAIL</td><td>NASCIMENTO </td><td>IDADE</td>
<td>DDD</td><td>CELULAR </td><td>SEXO</td><td>CHEKE</td><td>CRM</td><td>TURNO</td><td>EXPEDICAO</td><td>mensagem</td></tr>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  
echo "<tr><td>" 
. $row['nome'] . "</td><td>" . $row['sobrenome']. "</td><td>" . $row['cpf']. "</td><td>" . $row['rg']. "</td><td>" . $row['nacionalidade'].
 "</td><td>" .  $row['email']. "</td><td>" . $row['nascimento']. "</td><td>" . $row['idade']. "</td><td>" . $row['ddd'].
"</td><td>" . $row['celular']. "</td><td>" . $row['sexo']. "</td><td>" . $row['checke']. "</td><td>" . $row['crm']. "</td><td>". $row['turno']. "</td><td>". $row['expedicao']. "</td><td>". $row['mensagem']."</td></tr> ";
}
echo "</table>"; 



$result = mysqli_query($con,'SELECT * FROM atendente');
echo "<BR><BR>ATENDENTES CADASTRADOS";
echo "<table width='300px' border='1px'><tr><td>NOME</td><td>SOBRENOME</td><td>CPF </td><td>RG </td><td>NACIONALIDADE</td><td>EMAIL</td><td>NASCIMENTO </td><td>IDADE</td>
<td>DDD</td><td>CELULAR </td><td>SEXO</td><td>CHEKE</td><td>TURNO</td><td>EXPEDICAO</td><td>mensagem</td></tr>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  
echo "<tr><td>" 
. $row['nome'] . "</td><td>" . $row['sobrenome']. "</td><td>" . $row['cpf']. "</td><td>" . $row['rg']. "</td><td>" . $row['nacionalidade'].
 "</td><td>" .  $row['email']. "</td><td>" . $row['nascimento']. "</td><td>" . $row['idade']. "</td><td>" . $row['ddd'].
"</td><td>" . $row['celular']. "</td><td>" . $row['sexo']. "</td><td>" . $row['checke']. "</td><td>". $row['turno']. "</td><td>". $row['expedicao']. "</td><td>" . $row['mensagem']."</td></tr> ";
}
echo "</table>"; 



 ?>