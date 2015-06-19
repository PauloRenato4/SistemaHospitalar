

var UserDelete = {

    init:function(){
        
        UserDelete.createEvent();                        
    
    },


 createEvent:function(){
        document.formulario.addEventListener('reset', function(event) {			                                      
            var cpf = document.formulario.cpf.value;
            UserAcco.deletarpaciente(cpf);            
            
            event.preventDefault();			
		});
    },


deletarpaciente: function(cpf) {
		if(ContactListService.remove(cpf)) {
			var dl = cpf.parentNode.parentNode;
			dl.parentNode.removeChild(dl);
		}
	}

};


$(document).ready(function() {
    $('#deletarP').click(function(){ 
	UserDelete.init();})
});