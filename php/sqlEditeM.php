<?php
include_once('conect.php');


function updateUser($user, $column, $valueColumn){
    
    $update = "UPDATE medico SET " . $column . " = '$valueColumn' WHERE cpf = '$user';";
    $valid =  mysqli_query($con,$update);
    return $valid;
}
?>