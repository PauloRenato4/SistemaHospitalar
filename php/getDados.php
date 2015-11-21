<?php

    
    include_once('conexao.php');
 
  $sql = $conexao_pdo->prepare("SELECT *                                                           
                                FROM  agenda ");  
    $vetor[] = array($sql); 
        
    
    //Passando vetor em forma de json
    echo json_encode($vetor);
    
?>