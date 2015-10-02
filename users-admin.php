	<?php include_once('header.php'); ?>
		
	<?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
		<ol class="breadcrumb pull-right">
      <li><a href="dashboard.php">Inicio</a></li>
      <li><a href="users-home.php">Users</a></li>
      <li class="active">Administradores</li>
    </ol>

		<h1 class="page-header">Administradores <small>Consulta todos los administradores registrados.</small></h1>
		
    <div class="row">
      <div class="col-md-12">

        <a href="users-new.php" class="btn btn-primary btn-lg m-b-20">Nuevo Usuario</a>

        <div class="profile-container">
          <div class="profile-section">
            
            <div class="table-responsive">
              <table id="game" class="table table-striped table-bordered nowrap" width="100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rol de usuario</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; while($i < 5): ?>
                    <tr>
                      <td><?php echo randomString($nameArray); ?></td>
                      <td><?php echo randomString($lastnameArray); ?></td>
                      <td>Administrador</td>
                      <td class="actions">
                        <a href="users-edit.php" class="btn btn-icon btn-circle btn-success">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a href="users-view.php" class="btn btn-icon btn-circle btn-primary">
                          <i class="fa fa-search"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-icon btn-circle btn-danger">
                          <i class="fa fa-times"></i>
                        </a>
                      </td>
                    </tr>
                  <?php $i++; endwhile; ?>
                </tbody>
              </table>
            </div>

          </div> <!-- end profile-section -->
        </div> <!-- end profile-container -->
        
      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

	<?php include_once('footer.php'); ?>