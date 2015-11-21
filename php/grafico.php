<?php

$pdo = new PDO('mysql:host=localhost;dbname=u350455626_siste', 'u350455626_siste', 'univas35');

$sql = 'SELECT sexo as genero, COUNT(M) as quantidade FROM medico where sexo = M GROUP BY sexo';
 $table = array();
 $table['cols'] = array(
    
    array('label' => 'genero', 'type' => 'string'),
    array('label' => 'quantidade', 'type' => 'number')
);
$rows = array();
while($r = mysql_fetch_assoc($sql)) {
    $temp = array();
    // each column needs to have data inserted via the $temp array
    $temp[] = array('v' => $r['genero']);
    $temp[] = array('v' => (int) $r['quantidade']); // typecast all numbers to the appropriate type (int or float) as needed - otherwise they are input as strings
    
    // insert the temp array into $rows
    $rows[] = array('c' => $temp);
}
// populate the table with rows of data
$table['rows'] = $rows;
// encode the table as JSON
$jsonTable = json_encode($table);
echo $jsonTable;
?>