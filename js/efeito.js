////////////////////MASK/////////////
$(document).ready(function(){
    $('#dn').mask('99/99/9999');
    $('#cpf').mask('999.999.999-99', {reverse: true});
});
/////////////////VALIDAÇÃO///////////
$.validator.setDefaults({
    submitHandler: function(){
        alert("Dados preenchidos corretamente!");
    }
});
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
                required: "Digite o seu nome? *"
            },
            cpf:{
                required: "Qual o seu cpf? *",
                cpf: "Digite um CPF válido! *"
            },
            dn: {
                required: "Digite sua data de nascimento? *"
            },
            senha: {
                required: "Digite uma senha? *"
            },
            csenha: {
                required: "Confirme sua senha? *"
            },
            robo: {
                required: "Marque para poder continuar! *"
            },
            email:{
                required: "Qual o seu email? *",
                email: "Digite um E-mail válido! *"
            }
        }

    });
    $(".cancel").click(function() {
        validator.resetForm();
    });
});
