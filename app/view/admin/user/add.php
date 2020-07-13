<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Adicionar Usuário</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
          <form action="<?php echo getenv('APP_HOST').'/admin/usuario/adicionar'; ?>" method="post" enctype="multipart/form-data"> 
            <div class="row">
               <div class="col">
               <label for="name">Nome Completo</label>
                <input type="text" class="form-control" name="user_name" id="name"> 
               </div>
               <div class="col">
                <label for="mail">E-mail</label>
                <input type="email" class="form-control" name="user_mail" id="mail">
                </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="user_phone" id="phone">
            </div>
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="user_cpf" id="cpf">
            </div>
            <div class="col">
                <label for="date">Data de nascimento</label>
                <input type="date" class="form-control" name="user_date" id="date">
            </div>
            <div class="col">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="user_password" id="password">
            </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" name="user_zipcode" id="zipcode" >
            </div>
            <div class="col">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" name="user_address" id="address">
            </div>
            <div class="col">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control" name="user_complement" id="complement">
            </div>
            <div class="col">
                <label for="neighborhood">Bairro</label>
                <input type="text" class="form-control" name="user_neighborhood" id="neighborhood">
            </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" name="user_city" id="city">
            </div>
            <div class="col">
                <label for="state">Estado</label>
                <input type="text" class="form-control" name="user_state" id="state">
            </div>
            <div class="col">
                <label for="curriculum">Currículo</label>
                <input type="file" class="form-control" name="user_curriculum" id="curriculum">
            </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <input type="submit" value="Enviar" name="action" class="btn btn-primary" />
                </div>
            </div>
          </form>
          </div>
      </div>
    </main>
  </div>
</div>
<?php include_once  __DIR__."/../../include/footer.php"; ?>
<?php include_once  __DIR__."/../../include/mask.php"; ?>
<?php include_once  __DIR__."/../../include/cep.php"; ?>
<?php include_once  __DIR__."/../../include/message.php"; ?>