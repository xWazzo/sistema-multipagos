  <?php include_once('header.php'); ?>
    
  <?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
    <ol class="breadcrumb pull-right">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="users-home.php">Usuarios</a></li>
      <li class="active">Ver Usuario</li>
    </ol>

    <h1 class="page-header">Ver Usuario <small>Visualiza la información de cada usuario.</small></h1>

    <?php $user = array(
            'name' => randomString($nameArray),
            'lastname' => randomString($lastnameArray)
          ); 
    ?>
    
    <div class="row">
      <div class="col-md-12 form-horizontal">
        
        <div class="profile-container">
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Nombre</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo $user['name']; ?></label class="control-label">
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Apellido</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo $user['lastname']; ?></label class="control-label">
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Rol de usuario</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo randomString($userRolArray); ?></label class="control-label">
              </div>
            </div>

          </div>
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Embotelladora</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo randomString($embotelladoraArray); ?></label class="control-label">
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Sucursal</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo randomString($branchArray); ?></label class="control-label">
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Estado</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo randomString($stateArray); ?></label class="control-label">
              </div>
            </div>

          </div>
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Email</label>
              <div class="col-xs-12 col-sm-10">
                <div class="input-group">
                  <label class="control-label"><?php echo strtolower($user['name']).'.'.strtolower($user['lastname']).'@example.com'; ?></label class="control-label">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Usuario</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label"><?php echo strtolower($user['name']).'.'.strtolower($user['lastname']); ?></label class="control-label">
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Contraseña</label>
              <div class="col-xs-12 col-sm-10">
                <label class="control-label">*********</label class="control-label"> <a href="users-edit.php">Cambiar</a>
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-2">
                <a href="users-edit.php" type="submit" class="btn btn-sm btn-success">
                  <i class="fa fa-pencil"></i> Editar usaurio
                </a>
              </div>
            </div>
            
          </div>
        </div>

      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

  <?php include_once('footer.php'); ?>