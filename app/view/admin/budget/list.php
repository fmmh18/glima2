<?php include_once  __DIR__."/../../include/header.php"; ?>
<?php include_once  __DIR__."/../../include/admin/navbar.php"; ?>


<div class="container-fluid">
  <div class="row">
  <?php include_once  __DIR__."/../../include/admin/sidebar.php"; ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listar Orçamento</h1>
      </div>
      <div class="row mt-5">
          <div class="col-12 col-md-12">
              <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="3" width="1%">&nbsp;</th>
                </tr>
              </thead>
              <?php foreach($orcamentos as $orcamento): ?>
              <?php $orcamento_id = $orcamento["budget_id"]; ?>
              <tbody <?php if($orcamento['budget_read'] == 0 ): ?>style="color:green" <?php endif; ?>>
                <tr>
                    <td scope="col"><?php echo $orcamento['budget_id']; ?></td>
                    <td><?php echo $orcamento['budget_name']; ?><?php if($orcamento['budget_read'] == 0 ): ?><span class="badge badge-pill badge-success">Novo</span><?php endif;?></td>
                    <td scope="col"><?php echo $orcamento['budget_subject']; ?></td>
                    <td scope="col"><?php echo $orcamento['budget_message']; ?></td>
                    <td scope="col"><?php if($orcamento['budget_status'] == 1):  ?>Ativo<?php else: ?>Inativo<?php endif; ?></td>
                    <td scope="col"><a href="<?php echo getenv('APP_HOST')."/admin/orcamento/info/{$orcamento_id}"; ?>"><i class="fa fa-2x fa-info"></i></a></td>
                    <td scope="col"><a href="<?php echo getenv('APP_HOST')."/admin/orcamento/editar/{$orcamento_id}"; ?>"><i class="fa fa-2x fa-edit"></i></a></td>
                    <td scope="col"><a href="<?php echo getenv('APP_HOST')."/admin/orcamento/deletar/{$orcamento_id}"; ?>" data-confirm="Tem certeza de que deseja excluir o item selecionado?"><i class="fa fa-2x fa-trash"></i></a></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
              </table> 
          </div>
          </div>
          <div class="row">
              <div class="col-md-12 col-12">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="<?php echo getenv('APP_HOST').'/admin/orcamento/listar/0'; ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo; primeiro</span>
                    </a>
                  </li>
                  <?php for($i=0;$i < $orcamentos->total()/15;$i++): ?>
                  <li class="page-item"><a class="page-link"  href="<?php echo getenv('APP_HOST').'/admin/orcamento/listar/'.$i; ?>"><?php echo $i+1; ?></a></li> 
                  <?php endfor; ?>
                  <?php if($orcamentos->total() > 15): ?>
                  <li class="page-item">
                    <a class="page-link"  href="<?php echo getenv('APP_HOST').'/admin/orcamento/listar/'.$orcamentos->total(); ?>" aria-label="Next">
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