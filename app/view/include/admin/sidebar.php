<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/principal'; ?>">
              <span class="fa fa-home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li> 
          <?php if($usuario['user_level'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/usuario/listar/0'; ?>">
              <span class="fa fa-user"></span>
              Usuário
            </a>
          </li>
          <?php endif; ?>
          <?php if($usuario['user_level'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/pagina/listar/0'; ?>">
              <span class="fa fa-file"></span>
              Página
            </a>
          </li>
          <?php endif; ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/vaga/listar/0'; ?>">
              <span class="fa fa-briefcase"></span>
              Vaga
            </a>
          </li>
          <?php if($usuario['user_level'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/contato/listar/0'; ?>">
              <span class="fa fa-address-book"></span>
              Contatos
            </a>
          </li>
          <?php endif; ?>
          <?php if($usuario['user_level'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/orcamento/listar/0'; ?>">
              <span class="fa fa-building"></span>
              Orçamento
            </a>
          </li>
          <?php endif; ?>
          <?php if($usuario['user_level'] == 1): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo getenv('APP_HOST').'/admin/servico/listar/0'; ?>">
              <span class="fa fa-eject"></span>
              Serviço
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>