var UserAccount = {

    init:function(){
        
        UserAccount.createEvent();                        
    
    },

    createEvent:function(){
        document.formulario1.addEventListener('submit', function(event) {			                                      
            var validade = document.formulario1.validade.value;
            UserAccount.buscarData(validade);            
            
            event.preventDefault();			
		});
    },
        
        
    buscarData: function(validade){    
        
	 $.post('php/BuscaData.php', 
           {validade:validade},
           UserAccount.setDados
            );				
		
    
    },
             
    setDados:function(dados){
        
       dados = JSON.parse(dados);        
        if(dados.nome == undefined){
            alert("Data Nao cadastrada");
        } else if(dados){
        
        document.formulario.nome.value = dados.nome;
        document.formulario.sobrenome.value = dados.sobrenome;
        document.formulario.cpf.value = dados.cpf;
    alert("Paciente Ja cadastrado!");
    

     }
                                        
    }    
};

$(document).ready(function() {
    $('#buscarP').click(function(){ 
	UserAccount.init();})
});
