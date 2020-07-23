<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Serviço</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
          <form action="<?php echo getenv('APP_HOST').'/admin/servico/editar'; ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="service_id" id="id" value="<?php echo $service['service_id']; ?>">  
          <input type="hidden" class="form-control" name="service_image_old" id="image" value="<?php echo $service['service_image']; ?>">  
            <div class="row">
               <div class="col">
               <label for="name">Nome</label>
                <input type="text" class="form-control" name="service_name" id="name" value="<?php echo $service['service_name']; ?>"> 
               </div>
            </div>
            <div class="row">
               <div class="col">
               <label for="image">Imagem</label>
                <input type="file" class="form-control" name="service_image" id="image"> 
               </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="conteudo">Descrição</label>
                <textarea name="service_description" id="conteudo" class="form-control" cols="30" rows="10"><?php echo $service['service_description']; ?></textarea>
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
<?php include_once  __DIR__."/../../include/editor.php"; ?>
<?php include_once  __DIR__."/../../include/message.php"; ?>