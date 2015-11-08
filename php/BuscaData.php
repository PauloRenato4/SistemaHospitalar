<?php 


include_once('conexao.php');
  $validade = $_POST['validade'];
  $sql = $conexao_pdo->prepare("SELECT *                                                           
                                FROM  agenda v
                                WHERE v.validade='{$validade}'");                 
  $sql->execute();
  $sql_ret = $sql->fetch(PDO::FETCH_ASSOC);
  echo json_encode($sql_ret);


?>