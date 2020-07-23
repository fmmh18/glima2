<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Informação Vaga</h1>
      </div>
      <div class="row">
          <div class="col-md-12 col-12">
            <div class="col-md-12 col-12"><b>Nome</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_name']; ?></div>
            <div class="col-md-12 col-12"><b>E-mail</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_mail']; ?></div>
            <div class="col-md-12 col-12"><b>Telefone</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_phone']; ?></div>
            <div class="col-md-12 col-12"><b>Empresa e\ou Condomínio</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_condominium']; ?></div>
            <div class="col-md-12 col-12"><b>Assunto</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_subject']; ?></div>
            <div class="col-md-12 col-12"><b>Mensagem</b></div>
            <div class="col-md-12 col-12"><?php echo $orcamentos['budget_message']; ?></div>
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