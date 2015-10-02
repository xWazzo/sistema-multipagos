	<?php include_once('header.php'); ?>
	
	<?php include_once('sidebar.php'); ?>
	
	<div id="content" class="content">
		<ol class="breadcrumb pull-right">
			<li><a href="dashboard.php">Inicio</a></li>
			<li class="active">Dashboard</li>
		</ol>

		<h1 class="page-header">Dashboard <small>Resumen informativo.</small></h1>

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="widget widget-stats bg-green">
					<div class="stats-icon"><i class="fa fa-home"></i></div>
					<div class="stats-info">
						<h4>TOTAL DE SUCURSALES</h4>
						<p>58</p>	
					</div>
					<div class="stats-link">
						<a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
					</div>
				</div>
			</div> <!-- end col-3 -->

			<div class="col-md-3 col-sm-6">
				<div class="widget widget-stats bg-purple">
					<div class="stats-icon"><i class="fa fa-users"></i></div>
					<div class="stats-info">
						<h4>EMPLEADOS</h4>
						<p>2,125</p>	
					</div>
					<div class="stats-link">
						<a href="users-home.php">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
					</div>
				</div>
			</div><!-- end col-3 -->

			<div class="col-md-3 col-sm-6">
				<div class="widget widget-stats bg-blue">
					<div class="stats-icon"><i class="fa fa-gamepad"></i></div>
					<div class="stats-info">
						<h4>Juegos</h4>
						<p>3</p>	
					</div>
					<div class="stats-link">
						<a href="maraton.php">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
					</div>
				</div>
			</div><!-- end col-3 -->

			<div class="col-md-3 col-sm-6">
				<div class="widget widget-stats bg-red">
					<div class="stats-icon"><i class="fa fa-clock-o"></i></div>
					<div class="stats-info">
						<h4>Kilómetros obtenidos</h4>
						<p>165</p>
					</div>
					<div class="stats-link">
						<a href="maraton.php">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
					</div>
				</div>
			</div><!-- end col-3 -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-8">

				<div class="profile-container">
          <div class="profile-section">
						<h3 class="m-t-10">Gráfica</h3>
		        <div id="chart_div" class="m-t-20" style="width:400; height:300"></div>
		      </div>
		    </div>

			</div><!-- end col-8 -->

			<div class="col-md-4">

				<div class="profile-container">
          <div class="profile-section">
						<table class="table table-valign-middle m-b-0">
							<thead>
								<tr>	
									<th>Juego</th>
									<th>Kilómetros</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Serpientes y Escaleras</td>
									<td>157 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
								</tr>
								<tr>
									<td>Dominó</td>
									<td>327 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
								</tr>
								<tr>
									<td>Lotería</td>
									<td>123 <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
								</tr>
							</tbody>
						</table>
		      </div>
		      <div class="profile-section">
						<div id="datepicker-inline" class="datepicker-full-width"><div></div></div>
		      </div>
		    </div>
        
			</div> <!-- end col-4 -->
		</div> <!-- end row -->
	</div> <!-- end #content -->

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
          height: 385,
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