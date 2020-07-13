<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand sr-only" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo getenv('APP_HOST'); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo getenv('APP_HOST'); ?>/sobre">Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo getenv('APP_HOST'); ?>/contato">Contato</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo getenv('APP_HOST'); ?>/orcamento">Orçamento</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo getenv('APP_HOST'); ?>/trabalhe">Trabalhe</a>
      </li> 
    </ul>
  </div>
</nav>