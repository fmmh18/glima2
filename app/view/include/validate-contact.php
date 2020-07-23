<script>
$(function(){
    $("#contact_form").validate({
        rules : {
                contact_name:{
                        required:true,
                        minlength:3
                },
                contact_mail:{
                        required:true
                },
                contact_phone:{
                        required:true
                },
                contact_subject:{
                        required:true
                }, 
                contact_message:{
                        required:true
                }                                
        },
        messages:{
                contact_name:{
                        required:"Por favor, informe seu nome",
                        minlength:"O nome deve ter pelo menos 3 caracteres"
                },
                contact_mail:{
                        required:"É necessário informar um email"
                },
                contact_phone:{
                        required:"É necessário informar um telefone"
                },
                contact_subject:{
                        required:"O assunto não pode ficar em branco"
                },
                contact_message:{
                        required:"A mensagem não pode ficar em branco"
                }     
        }
    });
});
</script>