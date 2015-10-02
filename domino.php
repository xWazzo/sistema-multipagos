	<?php include_once('header.php'); ?>
		
	<?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
		<ol class="breadcrumb pull-right">
			<li><a href="dashboard.php">Inicio</a></li>
			<li><a href="maraton.php">Juegos</a></li>
			<li class="active">Dominó</li>
		</ol>

		<h1 class="page-header">Dominó <small>Progreso del juego Dominó.</small></h1>
		
    <div class="row">
      <div class="col-md-12">

        <div class="profile-container">
          <div class="profile-section">
            <p>Selecciona una fecha para revisar la informaicón.</p>
            <div class="input-group col-sm-4" id="default-daterange">
              <input type="text" name="default-daterange" class="form-control" value="" placeholder="click to select the date range" />
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
              </span>
            </div>
          </div>

          <div class="profile-section">
            <ul class="nav nav-pills">
              <li class="active"><a href="#nav-pills-tab-1" data-toggle="tab">Resultados</a></li>
              <li><a href="#nav-pills-tab-2" data-toggle="tab">Cargar resulgados</a></li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane fade active in" id="nav-pills-tab-1">
                <h3 class="m-t-10">Resultados</h3>
                <div class="table-responsive">
                  <table id="game" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Puntuación</th>
                        <th>Sucursal</th>
                        <th>KM Obtenidos</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; while($i < 15): 
                        $km = rand(0, 15);
                        $status = $km < 5 ? 'Bajo': ($km < 10 && $km >= 5 ? 'Medio' : ($km < 13 && $km >= 10 ? 'Alto' : 'Sobresaliente' ) );
                      ?>
                        <tr>
                          <td><?php echo randomString($nameArray); ?></td>
                          <td><?php echo $status; ?></td>
                          <td><?php echo randomString($branchArray); ?></td>
                          <td><?php echo $km; ?></td>
                        </tr>
                      <?php $i++; endwhile; ?>
                    </tbody>
                  </table>
                </div>

              </div>

              <div class="tab-pane fade" id="nav-pills-tab-2">
                <h3 class="m-t-10">Cargar resultados</h3>

                <?php $n=1; while($n <= 10 ): ?>
                  <div class="form-inline <?php echo $n != 1 ? 'm-t-20':''; ?>">
                    <div class="form-group">
                      <label class=" control-label">Participante:</label>
                      <select class="default-select2 form-control" style="width: 150px;">
                        <option selected>Participante</option>
                        <?php $i=1; while($i < 30): ?>
                          <option><?php echo randomString($nameArray).' '.randomString($lastnameArray); ?></option>
                        <?php $i++; endwhile; ?>
                      </select>
                    </div>

                    <div class="form-group m-l-20">
                      <label class=" control-label">Kilómetros obtenidos:</label>
                      <input class="form-control" type="number" placeholder="00" />
                    </div>
                  </div>
                <?php $n++; endwhile; ?>

                <div class="form-group m-t-30">
                  <a href="domino.php" type="submit" class="btn btn-sm btn-success">Cargar resultados</a>
                </div>

              </div><!-- /#nav-pills-tab-2 -->

            </div>
          </div>

        </div>

      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

	<?php include_once('footer.php'); ?>