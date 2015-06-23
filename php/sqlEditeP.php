<?php
include('conect.php');


function updateUser($user, $column, $valueColumn){
    

    $con = mysqli_connect("localhost","u350455626_siste","univas35","u350455626_siste");



    $update = "UPDATE paciente SET " . $column . " = '$valueColumn' WHERE cpf = '$user';";
    $valid = mysqli_query($con,$update);
    return $valid;
}
?>