var deletUser = {
    
    init: function () {
        deletUser.readPage();
    },
    
    readPage: function () {
        
        var form = document.getElementById('editar');
        
        form.addEventListener('submit', function (event) {
                                deletUser.sendValues();
                                event.preventDefault();
                              });
    },
    
    sendValues: function () {
        
        var user = $('#cpf').val();
        
        $.post('php/DeletarM.php',
               {user: user},
               function (data) {
                    deletUser.report(data);
                });
    },
    
    report: function (data) {
        
        if(data=='success') {
            alert('Medico excluido com sucesso!');

            deletUser.clearForm(form);
        }
        
        else
            alert(data);
    },

    clearForm: function(form) {
        form.reset();
    },


       
};

deletUser.init();
                   