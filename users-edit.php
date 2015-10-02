  <?php include_once('header.php'); ?>
    
  <?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
    <ol class="breadcrumb pull-right">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="users-home.php">Usuarios</a></li>
      <li class="active">Editar Usuario</li>
    </ol>

    <h1 class="page-header">Editar Usuario <small>Modifica la información de cada usuario.</small></h1>

    <?php $user = array(
            'name' => randomString($nameArray),
            'lastname' => randomString($lastnameArray),
            'rol' => randomString($userRolArray)
          ); 
    ?>
  
    
    <div class="row">
      <div class="col-md-12 form-horizontal">
        
        <div class="profile-container">
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Nombre</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Nombre" value="<?php echo $user['name']; ?>" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Apellido</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Apellido" value="<?php echo $user['lastname']; ?>" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Rol de usuario</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option <?php echo $user['rol'] == 'Administrador' ? 'selected' : ''; ?>>Administrador</option>
                  <option <?php echo $user['rol'] == 'Gerente' ? 'selected' : ''; ?>>Gerente</option>
                  <option <?php echo $user['rol'] == 'Supervisor' ? 'selected' : ''; ?>>Supervisor</option>
                  <option <?php echo $user['rol'] == 'Promotor' ? 'selected' : ''; ?>>Promotor</option>
                </select>
              </div>
            </div>

          </div>
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Embotelladora</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option <?php echo randomString($embotelladoraArray) == 'FEMSA' ? 'selected' : ''; ?>>FEMSA</option>
                  <option <?php echo randomString($embotelladoraArray) == 'Arca Continental' ? 'selected' : ''; ?>>Arca Continental</option>
                  <option <?php echo randomString($embotelladoraArray) == 'CDF' ? 'selected' : ''; ?>>CDF</option>
                  <option <?php echo randomString($embotelladoraArray) == 'Bepensa' ? 'selected' : ''; ?>>Bepensa</option>
                  <option <?php echo randomString($embotelladoraArray) == 'Rica' ? 'selected' : ''; ?>>Rica</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Sucursal</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Nombre de la sucursal" value="<?php echo randomString($branchArray); ?>"  />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Estado</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option <?php echo randomString($stateArray) == 'Distrito Federal' ? 'selected' : ''; ?>>Distrito Federal</option>
                  <option <?php echo randomString($stateArray) == 'Aguascalientes' ? 'selected' : ''; ?>>Aguascalientes</option>
                  <option <?php echo randomString($stateArray) == 'Baja California' ? 'selected' : ''; ?>>Baja California</option>
                  <option <?php echo randomString($stateArray) == 'Baja California Sur' ? 'selected' : ''; ?>>Baja California Sur</option>
                  <option <?php echo randomString($stateArray) == 'Campeche' ? 'selected' : ''; ?>>Campeche</option>
                  <option <?php echo randomString($stateArray) == 'Chiapas' ? 'selected' : ''; ?>>Chiapas</option>
                  <option <?php echo randomString($stateArray) == 'Chihuahua' ? 'selected' : ''; ?>>Chihuahua</option>
                  <option <?php echo randomString($stateArray) == 'Coahuila' ? 'selected' : ''; ?>>Coahuila</option>
                  <option <?php echo randomString($stateArray) == 'Colima' ? 'selected' : ''; ?>>Colima</option>
                  <option <?php echo randomString($stateArray) == 'Durango' ? 'selected' : ''; ?>>Durango</option>
                  <option <?php echo randomString($stateArray) == 'Guanajuato' ? 'selected' : ''; ?>>Guanajuato</option>
                  <option <?php echo randomString($stateArray) == 'Estado de Guerrero' ? 'selected' : ''; ?>>Estado de Guerrero</option>
                  <option <?php echo randomString($stateArray) == 'Estado de Hidalgo' ? 'selected' : ''; ?>>Estado de Hidalgo</option>
                  <option <?php echo randomString($stateArray) == 'Jalisco' ? 'selected' : ''; ?>>Jalisco</option>
                  <option <?php echo randomString($stateArray) == 'Estado de México' ? 'selected' : ''; ?>>Estado de México</option>
                  <option <?php echo randomString($stateArray) == 'Michoacán' ? 'selected' : ''; ?>>Michoacán</option>
                  <option <?php echo randomString($stateArray) == 'Morelos' ? 'selected' : ''; ?>>Morelos</option>
                  <option <?php echo randomString($stateArray) == 'Nayarit' ? 'selected' : ''; ?>>Nayarit</option>
                  <option <?php echo randomString($stateArray) == 'Nuevo León' ? 'selected' : ''; ?>>Nuevo León</option>
                  <option <?php echo randomString($stateArray) == 'Oaxaca' ? 'selected' : ''; ?>>Oaxaca</option>
                  <option <?php echo randomString($stateArray) == 'Puebla' ? 'selected' : ''; ?>>Puebla</option>
                  <option <?php echo randomString($stateArray) == 'Querétaro' ? 'selected' : ''; ?>>Querétaro</option>
                  <option <?php echo randomString($stateArray) == 'Quintana Roo' ? 'selected' : ''; ?>>Quintana Roo</option>
                  <option <?php echo randomString($stateArray) == 'San Luis Potosí' ? 'selected' : ''; ?>>San Luis Potosí</option>
                  <option <?php echo randomString($stateArray) == 'Sinaloa' ? 'selected' : ''; ?>>Sinaloa</option>
                  <option <?php echo randomString($stateArray) == 'Sonora' ? 'selected' : ''; ?>>Sonora</option>
                  <option <?php echo randomString($stateArray) == 'Tabasco' ? 'selected' : ''; ?>>Tabasco</option>
                  <option <?php echo randomString($stateArray) == 'Tamaulipas' ? 'selected' : ''; ?>>Tamaulipas</option>
                  <option <?php echo randomString($stateArray) == 'Tlaxcala' ? 'selected' : ''; ?>>Tlaxcala</option>
                  <option <?php echo randomString($stateArray) == 'Veracruz' ? 'selected' : ''; ?>>Veracruz</option>
                  <option <?php echo randomString($stateArray) == 'Yucatán' ? 'selected' : ''; ?>>Yucatán</option>
                  <option <?php echo randomString($stateArray) == 'Zacatecas' ? 'selected' : ''; ?>>Zacatecas</option>
                </select>
              </div>
            </div>

          </div>
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Email</label>
              <div class="col-xs-12 col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input class="form-control" type="email" placeholder="Email" value="<?php echo strtolower($user['name']).'.'.strtolower($user['lastname']).'@example.com'; ?>"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Usuario</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Usuario" value="<?php echo strtolower($user['name']).'.'.strtolower($user['lastname']); ?>"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Contraseña actual</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="password" placeholder="********"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Contraseña Nueva</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="password" placeholder="********"/>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Repetir Contraseña</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="password" placeholder="********" />
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-2">
                <a href="users-home.php" type="submit" class="btn btn-sm btn-success">Actualizar información</a>
              </div>
            </div>
            
          </div>
        </div>

      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

  <?php include_once('footer.php'); ?>