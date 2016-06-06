////////////////////MASK/////////////
$(document).ready(function(){
    $('#dn').mask('99/99/9999');
    $('#cpf').mask('999.999.999-99', {reverse: true});
});
/////////////////VALIDAÇÃO Cadastro///////////
/*$.validator.setDefaults({
    submitHandler: function(){
        alert("Dados preenchidos corretamente!");
    }
});*/
$().ready(function() {
    var validator=$("#formCadastro").validate({
        errorPlacement: function(error, element){
            $(element)
                .closest("form")
                .find("label[for='"+element.attr("id")+"']")
                .append(error);
        },
        errorElement: "span",
        rules:{
            email:{
                required: true, email: true
            },
            cpf:{
                required: true, cpf: 'both'
            }
        },
        messages:{
            nome: {
                required: "Digite o seu Nome *"
            },
            cpf:{
                required: "Digite o seu CPF *",
                cpf: "Digite um CPF válido! *"
            },
            dn: {
                required: "Digite sua data de Nascimento *"
            },
            senha: {
                required: "Digite sua Senha *"
            },
            csenha: {
                required: "Confirme sua Senha *"
            },
            robo: {
                required: "Marque para poder continuar! *"
            },
            email:{
                required: "Digite o seu Email *",
                email: "Digite um E-mail válido! *"
            }
        }

    });
    $(".cancel").click(function() {
        validator.resetForm();
    });
});
/////////////////VALIDAÇÃO Contato///////////
/*$.validator.setDefaults({
    submitHandler: function(){
        alert("Dados preenchidos corretamente!");
    }
});*/
$().ready(function() {
    var validator=$("#formCont").validate({
        errorPlacement: function(error, element){
            $(element)
                .closest("form")
                .find("label[for='"+element.attr("id")+"']")
                .append(error);
        },
        errorElement: "span",
        rules:{
            email:{
                required: true, email: true
            }
        },
        messages:{
            nome: {
                required: "Digite o seu Nome *"
            },
            assunto: {
                required: "Digite o Assunto *"
            },
            msg: {
                required: "Digite a sua Mensagem *"
            },
            email:{
                required: "Digite o seu email *",
                email: "Digite um E-mail válido! *"
            }
        }

    });
    $(".cancel").click(function() {
        validator.resetForm();
    });
});