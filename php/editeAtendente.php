<?php
    
include_once('sqlEditeA.php');

$vetData = array();
$valid = "3";
$vetData[0] = $_POST["cpf"];
$vetData[1] = "nome";
$vetData[2] = $_POST["nome"];
$vetData[3] = "sobrenome";
$vetData[4] = $_POST["sobrenome"];
$vetData[5] = "rg";
$vetData[6] = $_POST["rg"];
$vetData[7] = "nacionalidade";
$vetData[8] = $_POST["nacionalidade"];
$vetData[9] = "email";
$vetData[10] = $_POST["email"];
$vetData[11] = "nascimento";
$vetData[12] = $_POST["nascimento"];
$vetData[13] = "idade";
$vetData[14] = $_POST["idade"];
$vetData[15] = "ddd";
$vetData[16] = $_POST["ddd"];
$vetData[17] = "celular";
$vetData[18] = $_POST["celular"];
$vetData[19] = "sexo";
$vetData[20] = $_POST["sexo"];
$vetData[21] = "tipo";
$vetData[22] = $_POST["tipo"];
$vetData[23] = "logradouro";
$vetData[24] = $_POST["logradouro"];
$vetData[25] = "numero";
$vetData[26] = $_POST["numero"];
$vetData[27] = "bairro";
$vetData[28] = $_POST["bairro"];
$vetData[29] = "estado";
$vetData[30] = $_POST["estado"];
$vetData[31] = "cidade";
$vetData[32] = $_POST["cidade"];
$vetData[33] = "cep";
$vetData[34] = $_POST["cep"];
$vetData[33] = "expedicao";
$vetData[34] = $_POST["expedicao"];
$vetData[33] = "turno";
$vetData[34] = $_POST["turno"];

if($vetData[0] == ""){
    echo "noUser";
    return;
}
for($i = 1; $i < 36; $i = $i + 2) {  
    
    if(isset($vetData[$i + 1]) && $vetData[$i + 1] != "" && $vetData[$i + 1] != "n"){
        
       
            $valid = updateUser($vetData[0], $vetData[$i], $vetData[$i+1]);

       
    }
}
if($valid==1)
    echo "success";
else if($valid == "3")
    echo "null";
    
else
    echo $valid;
?>