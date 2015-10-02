	<?php include_once('header.php'); ?>
		
	<?php include_once('sidebar.php'); ?>
        
  <div id="content" class="content">
		<ol class="breadcrumb pull-right">
			<li><a href="dashboard.php">Inicio</a></li>
			<li><a href="maraton.php">Juegos</a></li>
			<li class="active">Maratón</li>
		</ol>

		<h1 class="page-header">Maratón <small>Progreso del maratón.</small></h1>
		
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
              <li class="active"><a href="#nav-pills-tab-1" data-toggle="tab">Gráfica</a></li>
              <li><a href="#nav-pills-tab-2" data-toggle="tab">Participantes</a></li>
              <li><a href="#nav-pills-tab-3" data-toggle="tab">Juegos</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active in" id="nav-pills-tab-1">
                <h3 class="m-t-10">Gráfica</h3>
                <div id="chart_div" class="m-t-20" style="width:400; height:300"></div>
              </div>
              <div class="tab-pane fade" id="nav-pills-tab-2">
                <h3 class="m-t-10">Participantes</h3>
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
                        $km = rand(0, 100);
                        $status = $km < 30 ? 'Bajo': ($km < 60 && $km >= 30 ? 'Medio' : ($km < 90 && $km >= 60 ? 'Alto' : 'Sobresaliente' ) );
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
              <div class="tab-pane fade" id="nav-pills-tab-3">
                <h3 class="m-t-10">Juegos</h3>
                
                <div class="col-xs-6 col-sm-4">
                  <div class="widget widget-stats bg-green">
                    <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                    <div class="stats-info">
                      <span>Ver resumen del juego</span>
                      <p>Seripientes y Escaleras</p> 
                    </div>
                    <div class="stats-link">
                      <a href="serpientes-y-escaleras.php">Ir a resultados <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                  <div class="widget widget-stats bg-blue">
                    <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                    <div class="stats-info">
                      <span>Ver resumen del juego</span>
                      <p>Dominó</p>
                    </div>
                    <div class="stats-link">
                      <a href="domino.php">Ir a resultados <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-sm-4">
                  <div class="widget widget-stats bg-red">
                    <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                    <div class="stats-info">
                      <span>Ver resumen del juego</span>
                      <p>Lotería</p>
                    </div>
                    <div class="stats-link">
                      <a href="loteria.php">Ir a resultados <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div> <!-- end col-12 -->
    </div> <!-- end row -->
  </div><!-- end #content -->

   <!--Load the AJAX API. Do this only once per web page! -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      google.load('visualization', '1', {packages: ['corechart', 'bar']});
      google.setOnLoadCallback(drawMaterial);

      function drawMaterial() {
        var data = google.visualization.arrayToDataTable([
          ['Personas', 'Kilómetros recorridos'],
          ['<?php echo randomString($nameArray); ?> <?php echo randomString($lastnameArray); ?>', <?php echo rand(0, 100); ?>],
          ['<?php echo randomString($nameArray); ?> <?php echo randomString($lastnameArray); ?>', <?php echo rand(0, 100); ?>],
          ['<?php echo randomString($nameArray); ?> <?php echo randomString($lastnameArray); ?>', <?php echo rand(0, 100); ?>],
          ['<?php echo randomString($nameArray); ?> <?php echo randomString($lastnameArray); ?>', <?php echo rand(0, 100); ?>],
          ['<?php echo randomString($nameArray); ?> <?php echo randomString($lastnameArray); ?>', <?php echo rand(0, 100); ?>]
        ]);

        var options = {
          width: '100%',
          height: 350,
          hAxis: {
            title: 'Total Population',
            minValue: 0,
          },
          bars: 'horizontal'
        };
        var material = new google.charts.Bar(document.getElementById('chart_div'));
        material.draw(data, options);
      }


    </script>

	<?php include_once('footer.php'); ?>