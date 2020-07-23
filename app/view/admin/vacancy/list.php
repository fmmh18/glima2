<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listar Vaga</h1>
      </div>
      <?php if($usuario['user_level'] == 1): ?>
      <div class="row">
          <div class="col-12 col-md-12 text-right">
              <a href="<?php echo getenv('APP_HOST').'/admin/vaga/adicionar'; ?>" class="btn btn-success">Adicionar Vaga</a>
          </div>
      </div>
      <?php endif; ?>
      <div class="row mt-5">
          <div class="col-12 col-md-12">
              <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vaga</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2">Ações</th>
                </tr>
              </thead>
              <?php if(count($vagas) > 0): ?>
              <?php foreach($vagas as $vaga): ?>
              <?php $vaga_id = $vaga["vacancy_id"]; ?>
              <tbody <?php if($vaga['vacancy_read'] == 0 ): ?>style="color:green" <?php endif; ?>>
                <tr>
                  <td scope="col"><?php echo $vaga['vacancy_id']; ?></td>
                  <td><?php echo $vaga['vacancy_name']; ?><?php if($vaga['vacancy_read'] == 0 ): ?><span class="badge badge-pill badge-success">Novo</span><?php endif;?></td>
                  <td scope="col"><?php echo $vaga['vacancy_quantity']; ?></td>
                  <td scope="col"><?php echo $vaga['vacancy_status']; ?></td>
                  <td scope="col"><a href="<?php echo getenv('APP_HOST')."/admin/vaga/info/{$vaga_id}"; ?>"><i class="fa fa-2x fa-edit"></i></a></td>
                  <?php if($usuario['user_level'] == 1): ?>
                  <td scope="col"><a href="<?php echo getenv('APP_HOST')."/admin/vaga/editar/{$vaga_id}"; ?>"><i class="fa fa-2x fa-edit"></i></a></td>
                  <td><a href="<?php echo getenv('APP_HOST')."/admin/vaga/deletar/{$vaga_id}"; ?>" data-confirm="Tem certeza de que deseja excluir o item selecionado?"><i class="fa fa-2x fa-trash"></i></a></td>
                  <?php else: ?> 
                  <td scope="col">&nbsp;</td>
                  <td scope="col">&nbsp;</td>
                  <?php endif; ?>
                </tr>
              </tbody>
              <?php endforeach; ?>
              <?php else: ?> 
              <tbody>
                <tr>
                <td scope="col" colspan="6" ><center>Essa tabela não possui registro.</center></td>
                </tr>
              </tbody>
              <?php endif; ?>
              </table> 
          </div>
          </div>
          <div class="row">
              <div class="col-md-12 col-12">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="<?php echo getenv('APP_HOST').'/admin/vaga/listar/0'; ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo; primeiro</span>
                    </a>
                  </li>
                  <?php for($i=0;$i < ($vagas->total()/15);$i++): ?>
                  <li class="page-item"><a class="page-link"  href="<?php echo getenv('APP_HOST').'/admin/vaga/listar/'.$i; ?>"><?php echo $i+1; ?></a></li> 
                  <?php endfor; ?>
                  <?php if($vagas->total() > 15): ?>
                  <li class="page-item">
                    <a class="page-link"  href="<?php echo getenv('APP_HOST').'/admin/vaga/listar/'.$vagas->total(); ?>" aria-label="Next">
                      <span aria-hidden="true">último &raquo;</span>
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </nav>
              </div>
          </div>
      </div>
    </main>
  </div>
</div>
<?php include_once  __DIR__."/../../include/footer.php"; ?> 
<?php include_once  __DIR__."/../../include/modal.php"; ?> 
<?php include_once  __DIR__."/../../include/message.php"; ?>