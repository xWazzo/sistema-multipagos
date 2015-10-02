		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="#"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							<?php echo $user['name'].' '.$user['lastname']; ?>
							<small><?php echo $_POST["name"]; ?></small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="has-sub">
						<a href="dashboard.php">
					    <i class="fa fa-laptop"></i> 
					    <span>Dashboard</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="#">
					    <b class="caret pull-right"></b>
					    <i class="fa fa-gamepad"></i> 
					    <span>Juegos</span>
						</a>
						<ul class="sub-menu">
							<li><a href="maraton.php">Maratón</a> <i class="fa fa-chart badge badge-success pull-right"></i></li>
							<li><a href="serpientes-y-escaleras.php">Serpientes y Escaleras</a></li>
							<li><a href="domino.php">Dominó</a></li>
							<li><a href="loteria.php">Lotería</a></li>
							<li><a href="memorama.php">Memorama</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="#">
					    <b class="caret pull-right"></b>
					    <i class="fa fa-user"></i> 
					    <span>Usuarios</span>
						</a>
						<ul class="sub-menu">
							<?php if($_POST["name"] != 'gerente'): ?>
								<li><a href="users-home.php">Ver Todos</a></li>
								<li><a href="users-admin.php">Administradores</a></li>
								<li><a href="users-gerente.php">Gerentes</a></li>
							<?php endif; ?>
							<?php if($_POST["name"] != 'supervisor'): ?>
								<li><a href="users-supervisor.php">Supervisores</a></li>
							<?php endif; ?>
							<li><a href="users-promotor.php">Promotores</a></li>
							<li><a href="users-new.php">Agregar Nuevo</a></li>
						</ul>
					</li>
					
					<li><a href="#" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

				</ul>

			</div>
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->