////////////////////MASK/////////////
$(document).ready(function(){
    $('#dn').mask('99/99/9999');
    $('#cpf').mask('999.999.999-99', {reverse: true});
});
//////////////VALIDAÇÃO////////////
$().ready(function() {
    $("#formCadastro").validate({
        rules:{
            dn:"required",
            robo:"required",
            nome:{
                required:true,
                minlength:2
            },
            senha:{
                required:true,
                minlength:6
            },
            csenha:{
                required:true,
                minlength:6,
                equalTo:"#senha"
            },
            email:{
                required: true, email: true
            },
            cpf:{
                required: true, cpf: 'both'
            }
        },
        messages: {
            nome: {
                required: " * Digite o seu Nome!",
                minlength:" * Deve ter no minimo 2 Letras!"
            },
            cpf: {
                required: " * Digite o seu CPF!",
                cpf: " * Digite um CPF válido!"
            },
            dn: {
                required: " * Digite sua data de Nascimento!"
            },
            senha: {
                required: " * Digite sua Senha!",
                minlength:" * Senha Deve Ter no minimo 6 caracteres!"
            },
            csenha: {
                required: " * Confirme sua Senha!",
                minlength:" * Senha Deve Ter no minimo 6 caracteres!",
                equalTo:" * Senha não são iguais!"
            },
            robo: {
                required: " * Marque para continuar!"
            },
            email: {
                required: " * Digite o seu Email!",
                email: " * Digite um E-mail válido!"
            }},
            errorPlacement: function(error, element){
                $(element)
                    .closest("form")
                    .find("label[for='"+element.attr("id")+"']")
                    .append(error);
            },
            errorElement: "span"
    });

    $("#formCont").validate({
        rules:{
            assunto:"required",
            msg:"required",
            nome:{
                required:true,
                minlength:2
            },
            email:{
                required: true, email: true
            }
        },
        messages:{
            nome: {
                required: " * Digite o seu Nome!",
                minlength:" * Deve ter no minimo 2 Letras!"
            },
            assunto: {
                required: " * Selecione o Assunto!"
            },
            msg: {
                required: " * Digite a sua Mensagem!"
            },
            email:{
                required: " * Digite o seu email!",
                email: " * Digite um E-mail válido!"
            }
        },
        errorPlacement: function(error, element){
            $(element)
                .closest("form")
                .find("label[for='"+element.attr("id")+"']")
                .append(error);
        },
        errorElement: "span"
    });
});