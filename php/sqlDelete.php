<?php
include_once('conect.php');


function deletUser($user){
    
     
    $sql = "DELETE FROM paciente WHERE cpf= '{$user}';";
     
    $delet =  mysqli_query($con,$sql);

    if($delet==1){
        return "ok";
    }
    else{
        return mysql_error();
    }
 
}
?>