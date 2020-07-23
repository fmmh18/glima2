<?php include_once  __DIR__."/../include/header.php"; ?>
<?php include_once  __DIR__."/../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <?php if($usuario['user_level'] == 1): ?>
      <div class="row">
        <div class="col">
        <div class="card">
        <div class="card-header bg-primary text-white">
         Usuários
        </div>
          <div class="card-body text-right" style="font-size: 2rem">
          <i class="fa fa-1x fa-user" style="float:left !important;margin-top:0.2rem"></i>
          <?php echo count($budget); ?>
          </div>
          <a href="<?php echo getenv('APP_HOST').'/admin/usuario/listar/0';?>" class="card-link text-center">
          <div class="card-footer bg-primary text-white"><span class="fa fa-plus"></span> usuários</div>
          </a>
        </div>
        </div>
        <div class="col">
        <div class="card">
        <div class="card-header bg-success text-white">
         <b>Contatos</b>
        </div>
          <div class="card-body text-right" style="font-size: 2rem">
          <i class="fa fa-1x fa-address-book" style="float:left !important;margin-top:0.2rem"></i>
          <?php echo count($budget); ?>
          </div>
          <a href="<?php echo getenv('APP_HOST').'/admin/contato/listar/0';?>" class="card-link text-center">
          <div class="card-footer bg-success text-white"><span class="fa fa-plus"></span> contatos</div>
          </a>
        </div>
        </div>
        <div class="col">
        <div class="card">
        <div class="card-header bg-info text-white">
        <b>Orçamentos</b>
        </div>
          <div class="card-body text-right" style="font-size: 2rem">
          <i class="fa fa-1x fa-building" style="float:left !important;margin-top:0.2rem"></i><?php echo count($budget); ?>
          </div>
          <a href="<?php echo getenv('APP_HOST').'/admin/orcamento/listar/0';?>" class="card-link text-center">
          <div class="card-footer bg-info text-white"><span class="fa fa-plus"></span> orçamentos</div>
          </a>
        </div>
        </div>
      </div>
      <?php elseif($usuario['user_level'] == 2): ?>
      <?php endif; ?>
    </main>
  </div>
</div>
<?php include_once  __DIR__."/../include/footer.php"; ?>