<header class="main-header">
    <!-- Logo -->
    <a href="https://ecuadorpc.com/" class="logo">
      <!-- mini logo de 50x50 px al contraer el menu hamburguesa-->
      <span class="logo-mini"><b>ECPC</span>
      <!-- logo para regular pc y dispositivos m�viles -->
	  <img class="site-logo" src="../images/Logo/logoEPC.png" width="100%" alt="ECUADORPC">
	  <!-- <img class="site-logo" src="https://www.deliverylaguacoto.com/wp-content/uploads/2020/10/epc.jpg" width="50%" alt="ECUADORPC"> -->
      
    </a>
    <!-- Header Navbar: estilo se modifica en header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Navegación </span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Cuenta usuario: estilo encontrado en dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/FotoPerfil/'.$user['photo'] : '../images/FotoPerfil/profile.jpg'; ?>" class="user-image" alt="Usr Circulo">
              <span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/FotoPerfil/'.$user['photo'] : '../images/FotoPerfil/profile.jpg'; ?>" class="img-circle" alt="Usr Cuadro">

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Miembro desde <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Actualizar
</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>