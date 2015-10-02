	<?php include_once('header.php'); ?>
		
	<?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
		<ol class="breadcrumb pull-right">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="users-home.php">Usuarios</a></li>
			<li class="active">Nuevo Usuario</li>
		</ol>

		<h1 class="page-header">Nuevo Usuario <small>Llena los siguientes datos a continuación.</small></h1>
		
    <div class="row">
      <div class="col-md-12 form-horizontal">
        
        <div class="profile-container">
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Nombre</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Nombre" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Apellido</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Apellido" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Rol de usuario</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option>Administrador</option>
                  <option>Gerente</option>
                  <option>Supervisor</option>
                  <option>Promotor</option>
                </select>
              </div>
            </div>

          </div>
          <div class="profile-section">

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Embotelladora</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option>FEMSA</option>
                  <option>Arca Continental</option>
                  <option>CDF</option>
                  <option>Bepensa</option>
                  <option>Rica</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Sucursal</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Nombre de la sucursal" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Estado</label>
              <div class="col-xs-12 col-sm-10">
                <select class="form-control">
                  <option>Distrito Federal</option>
                  <option>Aguascalientes</option>
                  <option>Baja California</option>
                  <option>Baja California Sur</option>
                  <option>Campeche</option>
                  <option>Chiapas</option>
                  <option>Chihuahua</option>
                  <option>Coahuila</option>
                  <option>Colima</option>
                  <option>Durango</option>
                  <option>Guanajuato</option>
                  <option>Estado de Guerrero</option>
                  <option>Estado de Hidalgo</option>
                  <option>Jalisco</option>
                  <option>Estado de México</option>
                  <option>Michoacán</option>
                  <option>Morelos</option>
                  <option>Nayarit</option>
                  <option>Nuevo León</option>
                  <option>Oaxaca</option>
                  <option>Puebla</option>
                  <option>Querétaro</option>
                  <option>Quintana Roo</option>
                  <option>San Luis Potosí</option>
                  <option>Sinaloa</option>
                  <option>Sonora</option>
                  <option>Tabasco</option>
                  <option>Tamaulipas</option>
                  <option>Tlaxcala</option>
                  <option>Veracruz</option>
                  <option>Yucatán</option>
                  <option>Zacatecas</option>
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
                  <input class="form-control" type="email" placeholder="Email" />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Usuario</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="text" placeholder="Usuario" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Contraseña</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="password" placeholder="********" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-12 col-sm-2 control-label">Repetir Contraseña</label>
              <div class="col-xs-12 col-sm-10">
                <input class="form-control" type="password" placeholder="********" />
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-10 col-sm-offset-2">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value=""> Enviar usuario y contraseña por correo.
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-12 col-sm-2">
                <a href="users-home.php" type="submit" class="btn btn-sm btn-success">Agregar usuario</a>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

	<?php include_once('footer.php'); ?>