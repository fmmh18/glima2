<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Contato</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
          <form action="<?php echo getenv('APP_HOST').'/admin/contato/editar'; ?>" method="post">
          <input type="hidden" class="form-control" name="contact_id" id="id" value="<?php echo $contato['contact_id']; ?>">
            <div class="row">
               <div class="col">
               <label for="name">Nome</label>
                <input type="text" class="form-control" name="contact_name" id="name" value="<?php echo $contato['contact_name']; ?>"> 
               </div>
            </div>
            <div class="row">
               <div class="col">
               <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="contact_phone" id="phone" value="<?php echo $contato['contact_phone']; ?>"> 
               </div>
            </div>
            <div class="row">
               <div class="col">
               <label for="mail">E-mail</label>
                <input type="text" class="form-control" name="contact_mail" id="mail" value="<?php echo $contato['contact_mail']; ?>"> 
               </div>
            </div>
            <div class="row">
               <div class="col">
               <label for="subject">Assunto</label>
                <input type="text" class="form-control" name="contact_subject" id="subject" value="<?php echo $contato['contact_subject']; ?>"> 
               </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="conteudo">Menssagem</label>
                <textarea name="contact_message" id="conteudo" class="form-control" cols="30" rows="10"><?php echo $contato['contact_message']; ?></textarea>
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
<?php include_once  __DIR__."/../../include/editor.php"; ?>
<?php include_once  __DIR__."/../../include/message.php"; ?>