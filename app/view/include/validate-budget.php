<script>
$(function(){
    $("#budget_form").validate({
        rules : {
            budget_name:{
                        required:true,
                        minlength:3
                },
                budget_mail:{
                        required:true
                },
                budget_phone:{
                        required:true
                },
                budget_subject:{
                        required:true
                }, 
                budget_condominium:{
                        required:true
                }  , 
                budget_message:{
                        required:true
                }                                
        },
        messages:{
                budget_name:{
                        required:"Por favor, informe seu nome",
                        minlength:"O nome deve ter pelo menos 3 caracteres"
                },
                budget_mail:{
                        required:"É necessário informar um email"
                },
                budget_phone:{
                        required:"É necessário informar um telefone"
                },
                budget_subject:{
                        required:"O assunto não pode ficar em branco"
                },
                budget_condominium:{
                        required:"O condomínio e/ou empresa não pode ficar em branco"
                },
                budget_message:{
                        required:"A mensagem não pode ficar em branco"
                }     
        }
    });
});
</script>