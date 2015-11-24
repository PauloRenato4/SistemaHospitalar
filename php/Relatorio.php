<?php

include_once('conexao.php');
  
  $sql = ("SELECT estado, COUNT(*) as quantidade FROM paciente GROUP BY estado'");                                                       
                                           
  $sql_ret = $sql;
                                                       
                               
 $table = array();
$table['cols'] = array(
	
    array('label' => 'estado', 'type' => 'string'),
	array('label' => 'quantidade', 'type' => 'number')
);
$rows = array();
while($r = mysql_fetch_assoc($$sql_ret)) {
    $temp = array();
	// each column needs to have data inserted via the $temp array
	$temp[] = array('v' => $r['estado']);
	$temp[] = array('v' => (int) $r['quantidade']); 
	
	
    $rows[] = array('c' => $temp);
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);
echo $jsonTable;
?>