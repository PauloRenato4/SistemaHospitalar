<?php 

include_once('conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf =$_POST['cpf'];
$rg =$_POST['rg'];
$nacionalidade =$_POST['nacionalidade'];
$email =$_POST['email'];
$nascimento =$_POST['nascimento'];
$idade =$_POST['idade'];
$ddd = $_POST['ddd'];
$celular =$_POST['celular'];
$sexo = $_POST['sexo'];
$tipo =$_POST['tipo'];	
$logradouro =$_POST['logradouro'];
$numero =$_POST['numero'];
$bairro =$_POST['bairro'];
$estado =$_POST['estado'];
$cidade =$_POST['cidade'];
$cep =$_POST['cep'];
$expedicao =$_POST['expedicao'];
$turno =$_POST['turno'];
$checke = $_POST['checke'];
$mensagem = $_POST['mensagem'];


 mysql_query("INSERT INTO atendente(nome,sobrenome,cpf,rg,nacionalidade,email,nascimento,idade,ddd,celular,sexo,tipo,logradouro,numero,bairro,estado,cidade,cep,expedicao,turno,checke,mensagem)
	VALUES ('$nome','$sobrenome','$cpf','$rg','$nacionalidade','$email','$nascimento','$idade','$ddd','$celular','$sexo','$tipo','$logradouro','$numero', '$bairro','$estado','$cidade','$cep','$expedicao','$turno','$checke', '$mensagem')")
 ?>