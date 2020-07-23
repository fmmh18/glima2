<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editar Vaga</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
          <form action="<?php echo getenv('APP_HOST').'/admin/vaga/editar'; ?>" method="post">
          <input type="hidden" class="form-control" name="page_id" id="id" value="<?php echo $page[0]['page_id']; ?>">
            <div class="row">
               <div class="col">
               <label for="pagina">Página</label>
                <input type="text" class="form-control" name="page_name" id="pagina" value="<?php echo $page[0]['page_name']; ?>"> 
               </div>
               <div class="col">
                <label for="tag">Tag</label>
                <input type="text" class="form-control" name="page_tag" id="tag" value="<?php echo $page[0]['page_tag']; ?>">
                </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="conteudo">Conteúdo</label>
                <textarea name="page_html" id="conteudo" class="form-control" cols="30" rows="10"><?php echo $page[0]['page_html']; ?></textarea>
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