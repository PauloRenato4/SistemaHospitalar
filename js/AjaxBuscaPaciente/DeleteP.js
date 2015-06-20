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
        
        $.post('php/DeletarP.php',
               {user: user},
               function (data) {
                    deletUser.report(data);
                });
    },
    
    report: function (data) {
        
        if(data=='success')
            alert('Paciente excluido com sucesso!');
        
        else
            alert(data);
    }
                  
};

deletUser.init();
                   