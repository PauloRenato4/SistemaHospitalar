<?php
include('conect.php');


function deletUser($user){

$con = mysqli_connect("localhost","u350455626_siste","univas35","u350455626_siste");

     
    $sql = "DELETE FROM medico WHERE cpf= '{$user}';";
     
    $delet =  mysqli_query($con,$sql);
    if($delet){
        return "ok";
    }
    else{
        return mysql_error();
    }
 
}
?>