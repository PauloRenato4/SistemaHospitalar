<?php
include_once('conect.php');


function deletUser($user){
    
     
    $sql = "DELETE FROM atendente WHERE cpf= '{$user}';";
     
    $delet = mysql_query($sql);
    
    if($delet==1)
        return "ok";
    else
        return mysql_error();
 
}
?>