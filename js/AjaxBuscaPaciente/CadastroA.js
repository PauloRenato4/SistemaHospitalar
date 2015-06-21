var cadPerson = {
    
    init: function () {
        cadPerson.readPage();
    },
    
    readPage: function () {
        
        var form = document.getElementById('cadastrar');
        
        form.addEventListener('submit', function (event) {
                                            var data = cadPerson.sendValues();
                                            event.preventDefault();
                                            
                                        }
                             )
    },
    
    sendValues: function () {

var cpf = $("#cpf").val();
        var nome = $("#nome").val();
        var sobrenome = $("#sobrenome").val();
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
        var checke = $("#checke").val();
        var mensagem = $("#mensagem").val();
        var expedicao = $("#expedicao").val();
        var turno = $("#turno").val();
        
        $.post('php/CadastroAtendente.php',
               {cpf: cpf, nome: nome, sobrenome: sobrenome, rg: rg, nacionalidade: nacionalidade, email: email,
                nascimento: nascimento, idade: idade, ddd: ddd, celular: celular, sexo: sexo, tipo: tipo, logradouro: logradouro, numero: numero,
                bairro: bairro, estado: estado, cidade: cidade, cep: cep, checke: checke, mensagem: mensagem, expedicao: expedicao, turno: turno},
               function(data){
                    cadPerson.report(data);
                });
    },
    
    report: function(data) {
        
        if(data=='success')
            alert('Cadastro Realizado com sucesso!');
        
        else
            alert(data);
    }
}

cadPerson.init();