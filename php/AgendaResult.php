<?php 
include_once('conect.php');

$result = mysqli_query($con,'SELECT * FROM agenda');
echo "PACIENTES AGENDADOS";
echo "<table width='300px' border='1px'><tr><td>NOME</td><td>SOBRENOME</td><td>CPF </td><td>RG </td><td>NACIONALIDADE</td><td>EMAIL</td><td>NASCIMENTO </td><td>IDADE</td>
<td>DDD</td><td>CELULAR </td><td>SEXO</td><td>CONSULTA</td><td>MEDICO</td><td>DATA</td><td>HORA INICIAL</td> <td>HORA FINAL</td></tr>";
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  
echo "<tr><td>" 
. $row['nome'] . "</td><td>" . $row['sobrenome']. "</td><td>" . $row['cpf']. "</td><td>" . $row['rg']. "</td><td>" . $row['nacionalidade'].
 "</td><td>" .  $row['email']. "</td><td>" . $row['nascimento']. "</td><td>" . $row['idade']. "</td><td>" . $row['ddd'].
"</td><td>" . $row['celular']. "</td><td>" . $row['sexo']. "</td><td>" . $row['consulta']. "</td><td>" . $row['medico']."</td><td>" . $row['timeini']. "</td><td>" . $row['timefin']. "</td>  
</tr> ";
}
echo "</table>"; 
?>