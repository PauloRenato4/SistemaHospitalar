$(document).ready(function(){
	        $('#tabela').empty(); //Limpando a tabela
                $.ajax({
		type:'POST',		//Definimos o mï¿½todo HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'getDados.php',//Definindo o arquivo onde serï¿½o buscados os dados

		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#tabela').append('<tr><td>'+dados[i].nome.value+'</td><td>'+dados[i].sobrenome.value+'</td><td>'
				 +dados[i].cpf.value);
			}
		}
	});
});