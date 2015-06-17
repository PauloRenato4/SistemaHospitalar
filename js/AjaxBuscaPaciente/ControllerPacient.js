var UserAccount = {

    init:function(){
        
        UserAccount.createEvent();                        
    
    },

    createEvent:function(){
        document.formulario.addEventListener('submit', function(event) {			                                      
            var cpf = document.formulario.cpf.value;
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
        
        document.formulario.nome.value = dados.nome;}
                                        
    }    
};

$(document).ready(function() {
    $('#buscarP').click(function(){ 
	UserAccount.init();})
});
