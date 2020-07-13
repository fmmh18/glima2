<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo getenv('APP_HOST').'/admin/principal' ?>"> <img src="<?php echo getenv('APP_HOST').'/assets/media/company/logo80.png' ?> " class="img-fluid sr-only" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $usuario[0]['user_name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo getenv('APP_HOST').'/admin/usuario/editar/'.$_SESSION['uID']; ?>"><i class="fa fa-user-edit"></i> Editar perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo getenv('APP_HOST').'/admin/sair'; ?>"><i class="fa fa-sign-out-alt"></i> Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>