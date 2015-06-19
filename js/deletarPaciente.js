

var UserDelete = {

    init:function(){
        
        UserDelete.createEvent();                        
    
    },


 createEvent:function(){
        document.formulario.addEventListener('submit', function(event) {			                                      
            var cpf = document.formulario.cpf.value;
            UserAcco.buscarPaciente(cpf);            
            
            event.preventDefault();			
		});
    },


};


$(document).ready(function() {
    $('#deletarP').click(function(){ 
	UserDelete.init();})
});