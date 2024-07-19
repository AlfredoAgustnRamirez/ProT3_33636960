<?php $session = session(); ?>
<?php if ($session->get('logged_in')) { ?>

  <?php if ($session->get('perfil_id') == 1) { ?>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('dashboard_admin'); ?>">
          <img src="<?php echo base_url('public/assets/img/Al-FreTech.png'); ?>" height="50" alt="Logo-circular" loading="lazy" />
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                <i class="far fa-id-card"></i> Administrar Usuarios
              </a>
              <div class="dropdown-menu">
                <a href="<?php echo base_url('lista_usuario'); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Lista de usuarios</a>
                <a href="<?php echo base_url('alta_usuario'); ?>" class="dropdown-item"><i class="fa fa-calendar-o"></i> Agregar un usuario</a>
                <a href="<?php echo base_url('usuarios_eliminados'); ?>" class="dropdown-item"><i class="fa fa-calendar-o"></i> Usuarios eliminados</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
                <span class="mr-2 d-none d-lg-inline">Bienvenido</span> <?php echo $session->get('nombre'); ?>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="<?php echo base_url('modificar_usuario/') . ($session->get('id_usuario')); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Modificar Perfil</a>
                <a href="<?php echo base_url('dashboard_admin'); ?>" class="dropdown-item"><i class="fa fa-calendar-o"></i> Panel</a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url('/logout'); ?>" class="dropdown-item"><i class="fas fa-power-off"></i> Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php } ?>

  <?php if ($session->get('perfil_id') == 2) { ?>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url(''); ?>">
          <img src="<?php echo base_url('public/assets/img/Al-FreTech.png'); ?>" height="50" alt="Logo-circular" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i> >
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('nosotros'); ?>"><i class="fa fa-users"></i> Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('acerca'); ?>"><i class="fa fa-handshake"></i> Acerca de</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Catálogo
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Celulares</a></li>
                <li><a class="dropdown-item" href="#">PC</a></li>
                <li><a class="dropdown-item" href="#">Notebooks</a></li>
                <li><a class="dropdown-item" href="#">Memorias</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
              </ul>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mx-auto">
            <div class="input-group">
              <input type="search" id="form1" class="form-control" placeholder="Buscar...">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#!">
                <i class="fas fa-shopping-cart"></i> <span>Carrito</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
                Bienvenido <?php echo $session->get('nombre'); ?><b class="caret"></b>
              </a>
              <div class="dropdown-menu">
                <a href="<?php echo base_url('modificar_usuario/') . ($session->get('id_usuario')); ?>" class="dropdown-item">
                  <i class="fa fa-user-o"></i> Modificar Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url('/logout'); ?>" class="dropdown-item">
                  <i class="fas fa-power-off"></i> Salir
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php } ?>

<?php } else { ?>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url(''); ?>">
        <img src="public/assets/img/Al-FreTech.png" height="50" alt="Logo-circular" loading="lazy" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(''); ?>"><i class="fa fa-home"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('nosotros'); ?>"><i class="fa fa-users"></i> Quiénes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('acerca'); ?>"><i class="fa fa-handshake"></i> Acerca de</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Acción</a></li>
              <li><a class="dropdown-item" href="#">Otra acción</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Algo más aquí</a></li>
            </ul>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mx-auto">
          <div class="input-group">
            <input type="search" id="form1" class="form-control" placeholder="Buscar...">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in-alt"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('registrarse'); ?>"><i class="fa fa-user-plus"></i> Registrarse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>