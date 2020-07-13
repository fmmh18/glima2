<?php include __DIR__."/include/header.php"; ?>
<body>
<?php include __DIR__."/include/contact.php"; ?>
<?php include __DIR__."/include/menu.php"; ?>
<div style="width:100%;background-color: white">
<div class="work">
<div class="container">
    <div class="row p-5">
        <div class="col-md-12 col-12 text-center">
            <h1 class="text-white mt-5"></h1>
        </div>
    </div>   
    </div>   
</div>
<div class="container pb-5 pt-3">
        <div class="col-md-12 col-12 pt-4"> 
        <form action="trabalhe" method="post" enctype="multipart/form-data">
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-user"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="nome" name="user_name" placeholder="Digite seu nome">
            </div>
        </div>  
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-envelope"></i></div>
            </div>
                <input type="text" class="form-control" id="email" name="user_mail" placeholder="Digite seu e-mail">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-phone"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="phone" name="user_phone" placeholder="Digite seu telefone">
            </div>
        </div> 
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-id-card"></i></div>
            </div>
                <input type="text" class="form-control" id="cpf" name="user_cpf" placeholder="Digite seu cpf">
            </div>
        </div>  
        <div class="col-auto">
        <div class="input-group mb-2">
                <input type="file" class="form-control" id="curriculum" name="user_curriculum">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="zipcode" name="user_zipcode" placeholder="Digite seu CEP">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="address" name="user_address" placeholder="Digite seu endereço">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="neighborhood" name="user_neighborhood" placeholder="Digite seu bairro">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="complement" name="user_complement" placeholder="Digite o complemento">
            </div>
        </div>
        <div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="city" name="user_city" placeholder="Digite a cidade">
            </div>
        </div><div class="col-auto">
        <div class="input-group mb-2">
            <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-location-arrow"></i>&nbsp;</div>
            </div>
                <input type="text" class="form-control" id="state" name="user_state" placeholder="Digite o estado">
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
<?php include __DIR__."/include/map.php"; ?>
<?php include __DIR__."/include/address.php"; ?>
<?php include __DIR__."/include/footer.php"; ?>
<?php include __DIR__."/include/mask.php"; ?>
<?php include __DIR__."/include/cep.php"; ?>
<?php include __DIR__  ."/include/message.php"; ?>