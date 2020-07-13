<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Usuário</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
          <form action="<?php echo getenv('APP_HOST').'/admin/usuario/editar'; ?>" method="post">
          <input type="hidden" class="form-control" name="user_id" id="id" value="<?php echo $user[0]['user_id']; ?>">
          <input type="hidden" class="form-control" name="user_curriculum1" id="id" value="<?php echo $user[0]['user_curriculum']; ?>">
            <div class="row">
               <div class="col">
               <label for="name">Nome Completo</label>
                <input type="text" class="form-control" name="user_name" id="name" value="<?php echo $user[0]['user_name']; ?>"> 
               </div>
               <div class="col">
                <label for="mail">E-mail</label>
                <input type="email" class="form-control" name="user_mail" id="mail" value="<?php echo $user[0]['user_mail']; ?>">
                </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="user_phone" id="phone" value="<?php echo $user[0]['user_phone']; ?>">
            </div>
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="user_cpf" id="cpf" value="<?php echo $user[0]['user_cpf']; ?>">
            </div>
            <div class="col">
                <label for="date">Data de nascimento</label>
                <input type="date" class="form-control" name="user_date" id="date" value="<?php echo $user[0]['user_date']; ?>">
            </div>
            <div class="col">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="user_password" id="password" value="<?php echo $user[0]['user_password']; ?>">
            </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" name="user_zipcode" id="zipcode" value="<?php echo $user[0]['user_zipcode']; ?>">
            </div>
            <div class="col">
                <label for="address">Endereço</label>
                <input type="text" class="form-control" name="user_address" id="address" value="<?php echo $user[0]['user_address']; ?>">
            </div>
            <div class="col">
                <label for="complement">Complemento</label>
                <input type="text" class="form-control" name="user_complement" id="complement" value="<?php echo $user[0]['user_complement']; ?>">
            </div>
            <div class="col">
                <label for="neighborhood">Bairro</label>
                <input type="text" class="form-control" name="user_neighborhood" id="neighborhood" value="<?php echo $user[0]['user_neighborhood']; ?>">
            </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" name="user_city" id="city" value="<?php echo $user[0]['user_city']; ?>">
            </div>
            <div class="col">
                <label for="state">Estado</label>
                <input type="text" class="form-control" name="user_state" id="state" value="<?php echo $user[0]['user_state']; ?>">
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