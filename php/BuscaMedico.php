<?php 


include_once('conexao.php');
  $cpf = $_POST['cpf'];
  $sql = $conexao_pdo->prepare("SELECT *                                                           
                                FROM  medico v
                                WHERE v.cpf='{$cpf}'");                 
  $sql->execute();
  $sql_ret = $sql->fetch(PDO::FETCH_ASSOC);
  echo json_encode($sql_ret);


?>