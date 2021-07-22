<aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar Panel de Usuario -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/FotoPerfil/'.$user['photo'] : '../images/FotoPerfil/profile.jpg'; ?>" class="img-circle" alt="Usr Izq">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> En Línea</a>
        </div>
      </div>

      <!-- Listado de menús para Informacion tipo sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">INFORMES</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Página Principal</span></a></li>
        <li class="header">GESTIONAR</li>
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Asistencia</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Empleados</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> Lista de empleados</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle-o"></i> Horas Extras</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Adelanto en efectivo</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Horarios</a></li>
          </ul>
        </li>

        <li><a href="deduction.php"><i class="fa fa-file-text"></i> <span>Descuentos</span></a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> <span>Cargos<span></a></li>
        <li class="header">REPORTES</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Nómina de sueldos</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Programar</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>