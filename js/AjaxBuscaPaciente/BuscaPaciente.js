var UserAccount = {

    init:function(){
        
        UserAccount.createEvent();                        
    
    },

    createEvent:function(){
        document.formulario1.addEventListener('submit', function(event) {			                                      
            var cpf = document.formulario1.cpf.value;
            UserAccount.buscarPaciente(cpf);            
            
            event.preventDefault();			
		});
    },
        
        
    buscarPaciente: function(cpf){    
        
	 $.post('php/BuscaPaciente.php', 
           {cpf:cpf},
           UserAccount.setDados
            );				
		
    
    },
             
    setDados:function(dados){
        
       dados = JSON.parse(dados);        
        if(dados.nome == undefined){
            alert("Cpf ainda nao cadastrado");
        } else if(dados){
        
        document.formulario.nome.value = dados.nome;
        document.formulario.sobrenome.value = dados.sobrenome;
        document.formulario.cpf.value = dados.cpf;
        document.formulario.rg.value = dados.rg;
        document.formulario.nacionalidade.value = dados.nacionalidade;
        document.formulario.email.value = dados.email;
        document.formulario.nascimento.value = dados.nascimento;
        document.formulario.idade.value = dados.idade;
        document.formulario.ddd.value = dados.ddd;
        document.formulario.celular.value = dados.celular;
        document.formulario.sexo.value = dados.sexo;
        document.formulario.tipo.value = dados.tipo;
        document.formulario.logradouro.value = dados.logradouro;
        document.formulario.numero.value = dados.numero;
        document.formulario.bairro.value = dados.bairro;        
        document.formulario.estado.value = dados.estado;
        document.formulario.cidade.value = dados.cidade;
        document.formulario.cep.value = dados.cep;
        document.formulario.consulta.value = dados.consulta;
        document.formulario.medico.value = dados.medico;
        document.formulario.validade.value = dados.validade;
        document.formulario.timeini.value = dados.timeini;
        document.formulario.timefin.value = dados.timefin;

           alert("Paciente Ja cadastrado!");


     }
                                        
    }    
};

$(document).ready(function() {
    $('#buscarP').click(function(){ 
	UserAccount.init();})
});
