<?php include __DIR__."/include/header.php"; ?>
<body>
<?php include __DIR__."/include/contact.php"; ?>
<?php include __DIR__."/include/menu.php"; ?>
<div style="width:100%;background-color: white">
<div class="budget">
<div class="container">
    <div class="row p-5">
        <div class="col-md-12 col-12 text-center">
            <h1 class="text-white mt-5">Orçamento</h1>
        </div>
    </div>   
    </div>   
</div>
<div class="container pb-5 pt-3">
        <div class="col-md-12 col-12 pt-4"> 
        <form action="orcamento" method="post" id="budget_form">
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="nome" name="budget_name" placeholder="Digite seu nome">
            </div>
        </div>  
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-envelope"></i></div>
            </div>
                <input type="text" class="form-control" id="email" name="budget_mail" placeholder="Digite seu e-mail">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-phone"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="phone" name="budget_phone" placeholder="Digite seu telefone">
            </div>
        </div> 
        <div class="col-auto">
        <div class="input-group mb-2"> 
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-quote-left"></i></div>
        </div>
                <input type="text" class="form-control" id="subject" name="budget_subject" placeholder="Digite o assunto"> 
        </div> 
        </div> 
        <div class="col-auto">
        <div class="input-group mb-2"> 
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-home"></i></div>
        </div>
                <input type="text" class="form-control" id="condominium" name="budget_condominium" placeholder="Digite o condomínio"> 
        </div> 
        </div> 
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-comment"></i></div>
            </div>
                <textarea name="budget_message" id="comentario" cols="30" rows="5"  class="form-control" placeholder="Digite seu comentário"></textarea>
            </div>
        </div> 
        <div class="col-auto">
            <input type="submit" class="btn btn-primary" name="action" value="Enviar" />
        </div>       
        </form>
        </div>
    </div> 
</div>
</div>
</body>
<?php include __DIR__  ."/include/map.php"; ?>
<?php include __DIR__  ."/include/address.php"; ?>
<?php include __DIR__  ."/include/footer.php"; ?>
<?php include __DIR__."/include/mask.php"; ?>
<?php include __DIR__."/include/validate-budget.php"; ?>
<?php include __DIR__  ."/include/message.php"; ?>