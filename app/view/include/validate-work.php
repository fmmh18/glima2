<script>
$(function(){
    $("#user_form").validate({
        rules : {
                user_name:{
                        required:true,
                        minlength:3
                },
                user_mail:{
                        required:true
                },
                user_phone:{
                        required:true
                },
                user_cpf:{
                        required:true
                }                              
        },
        messages:{
                user_name:{
                        required:"Por favor, informe seu nome",
                        minlength:"O nome deve ter pelo menos 3 caracteres"
                },
                user_mail:{
                        required:"É necessário informar um email"
                },
                user_phone:{
                        required:"É necessário informar um telefone"
                }  ,
                user_cpf:{
                        required:"É necessário informar o CPF"
                } 
        }
    });
});
</script>