<?php 

include_once('conexao.php');

$cpf = $_POST['cpf'];

if( $sql = 'SELECT cpf FROM paciente where cpf=$cpf'){

	echo "string";
}


Ajax.request({
			url      : "cep/endereco.php?cep=" + CEP,
			params   : form,
			callback : Index.preencherCampos,
			callerro : Index.limparCampo
		});


?>
