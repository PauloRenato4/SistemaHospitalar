var editeAtendente = {
    
    init: function () {
        editeAtendente.readPage();
    },
    
    readPage: function () {
        
        var form = document.getElementById('update');
        
        form.addEventListener('submit', function (event) {
                                editeAtendente.sendValues();
                                event.preventDefault();
                              });
    },
    
    sendValues: function () {
        
        var cpf = $("#cpf").val();
        var nome = $("#nome").val();
        var sobrenome = $("#sobrenome").Atendente
        var rg = $("#rg").val();
        var nacionalidade = $("#nacionalidade").val();
        var email = $("#email").val();
        var nascimento = $("#nascimento").val();
        var idade = $("#idade").val();
        var ddd = $("#ddd").val();
        var celular = $("#celular").val();
        var sexo = $("#sexo").val();
        var tipo = $("#tipo").val();
        var logradouro = $("#logradouro").val();
        var numero = $("#numero").val();
        var bairro = $("#bairro").val();
        var estado = $("#estado").val();
        var cidade = $("#cidade").val();
        var cep = $("#cep").val();
        var expedicao = $("#expedicao").val();
        var turno = $("#turno").val();
        
        $.post('php/editeAtendente.php',
               {cpf: cpf, nome: nome, sobrenome: sobrenome, rg: rg, nacionalidade: nacionalidade, email: email,
                nascimento: nascimento, idade: idade, ddd: ddd, celular: celular, sexo: sexo, tipo: tipo, logradouro: logradouro, numero: numero,
                bairro: bairro, estado: estado, cidade: cidade, cep: cep, expedicao: expedicao, turno: turno},
               function(data){
                    editeAtendente.report(data);
                });
    },
    
    report: function(data) {
        
        if(data=='success')
            alert('O usuario foi alterado com sucesso!');
        
        else if(data=='noUserField')
            alert('Favor informar um usuario!');
        
        else if(data=='nullFields')
            alert('Favor informar pelo menos um campo!'); 
        
        else if(data=='!user')
            alert('Usuário inválido!'); 
        
        else
            alert(data);
    }
}

editeAtendente.init();   